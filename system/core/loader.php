<?php

class Loader {

    protected $registry;

    public function __construct($registry) {
        $this->registry = $registry;
    }


    public function controller($route, $data = array()) {
        // Sanitize the call
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

        // Keep the original trigger
        $trigger = $route;

        // Trigger the pre events
        $result = $this->registry->get('event')->trigger('controller/' . $trigger . '/before', array(&$route, &$data));

        // Make sure its only the last event that returns an output if required.
        if ($result != null && !$result instanceof Exception) {
            $output = $result;
        } else {
            $action = new Action($route);
            $output = $action->execute($this->registry, array(&$data));
        }

        // Trigger the post events
        $result = $this->registry->get('event')->trigger('controller/' . $trigger . '/after', array(&$route, &$data, &$output));

        if ($result && !$result instanceof Exception) {
            $output = $result;
        }

        if (!$output instanceof Exception) {
            return $output;
        }
    }


    public function model($route) {
        // Sanitize the call
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

        if (!$this->registry->has('model_' . str_replace('/', '_', $route))) {
            $file  = DIR_APPLICATION . 'model/' . $route . '.php';
            $class = 'Model' . preg_replace('/[^a-zA-Z0-9]/', '', $route);

            if (is_file($file)) {
                include_once($file);

                $proxy = new Proxy();

                // Overriding models is a little harder so we have to use PHP's magic methods
                // In future version we can use runkit
                foreach (get_class_methods($class) as $method) {
                    $proxy->{$method} = $this->callback($this->registry, $route . '/' . $method);
                }

                $this->registry->set('model_' . str_replace('/', '_', (string)$route), $proxy);
            } else {
                throw new \Exception('Error: Could not load model ' . $route . '!');
            }
        }
    }


    public function view($route, $data = array()) {
        // Sanitize the call
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

        // Keep the original trigger
        $trigger = $route;

        // Template contents. Not the output!
        $code = '';

        // Trigger the pre events
        $result = $this->registry->get('event')->trigger('view/' . $trigger . '/before', array(&$route, &$data, &$code));

        // Make sure its only the last event that returns an output if required.
        if ($result && !$result instanceof Exception) {
            $output = $result;
        } else {
            $template = new Template($this->registry->get('config')->get('template_engine'));

            foreach ($data as $key => $value) {
                $template->set($key, $value);
            }

            $output = $template->render($this->registry->get('config')->get('template_directory') . $route, $code);
        }

        // Trigger the post events
        $result = $this->registry->get('event')->trigger('view/' . $trigger . '/after', array(&$route, &$data, &$output));

        if ($result && !$result instanceof Exception) {
            $output = $result;
        }

        return $output;
    }

    public function library($route) {
        // Sanitize the call
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

        $file = DIR_SYSTEM . 'library/' . $route . '.php';
        $class = str_replace('/', '\\', $route);

        if (is_file($file)) {
            include_once($file);

            $this->registry->set(basename($route), new $class($this->registry));
        } else {
            throw new \Exception('Error: Could not load library ' . $route . '!');
        }
    }

    public function helper($route) {
        $file = DIR_SYSTEM . 'helper/' . preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route) . '.php';

        if (is_file($file)) {
            include_once($file);
        } else {
            throw new \Exception('Error: Could not load helper ' . $route . '!');
        }
    }







}