// src/Controller/SkillsController.php

namespace App\Controller;

class SkillsController extends AppController
{
    public function index() {
        $skills = $this->Skills->find('all');
        $this->set(compact('skills'));
    }
}