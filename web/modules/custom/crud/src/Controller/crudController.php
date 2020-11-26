<?php

/**
 * @file
 * This file controls the crud
 */

namespace Drupal\crud\Controller;

use Drupal\Core\Controller\ControllerBase;

class crudController extends ControllerBase
{
    public function info()
    {
        return [
            '#markup' => '<p>' . $this->t('hello crud') . '</p>',
        ];
    }
}
