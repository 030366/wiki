<?php
/*********** Añadir Joins a consulta index de cakephp ******************/
$where = array(
              'joins' => array(
                            array(
                                    'table' => 'nombre_tabla',
                                    'alias' => 'alias_tabla',
                                    'type' => 'INNER',
                                    'conditions' => array(
                                        'alias_tabla.id = tabla_join_original.aliastabla_id'
                                    )
                                ),
                            ),
                            'fields'=>array(
                                'tabla_original.*',
                                'tabla_2.campo',
                                'Expediente.campo',
                                'alias_tabla.campo1',
                                'alias_tabla.campo1'  
                            ),
                            'conditions'=>array(
                                 $condicion
                            ),
                            'order' => '',
                            'limit'=>100
                        );                
                $this->Modelo->recursive = 0;
                $this->paginate = $where;
		$this->set('variable_modelo', $this->Paginator->paginate());
?>
