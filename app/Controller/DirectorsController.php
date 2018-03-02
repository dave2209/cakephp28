<?php
class DirectorsController extends AppController
{
    public $helpers = array('Html', 'Form');
    
    public function index()
    {
        $this->set('directors', $this->Director->find('all'));
    }
    
    public function ver($id = null)
    {
        if (!$id)
        {
            throw new NotFoundException('Datos Invalidos');
        }
        $director = $this->Director->findById($id);
        
        if (!$director)
        {
            throw new NotFoundException('El director no existe');
        }
        $this->set('director', $director);
    }
}
?>