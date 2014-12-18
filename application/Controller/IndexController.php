<?php

class IndexController extends Model3_Controller
{

    public function indexAction()
    {
        
    }

    /**
     * Esta accion mapeara las bases de datos, solo se debe tener habilitada en desarrollo, por favor borrala o comentala
     * para produccion
     */
    public function mapDBAction()
    {
        $logs[] = 'Inicia construccion de clases';
        $manager = Doctrine_Manager::getInstance();
        $conns = $manager->getConnections();
        foreach ($conns as $conn)
        {
            $logs[] = 'Base de datos ' . $conn->getName();
            Doctrine_Core::generateModelsFromDb('../application/Model',
                            array($conn->getName()), array(
                        'generateTableClasses' => TRUE
                        , 'baseClassPrefix' => 'generated_Base'
                        , 'pearStyle' => true
                        , 'classPrefix' => $conn->getName() . '_'
                        , 'baseClassesDirectory' => null));
        }
        $this->view->logs = $logs;
    }

}
