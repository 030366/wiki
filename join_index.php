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
                //ejecuta el SELECT * con los joins definidos en el crud de una clase X        
                $this->Modelo->recursive = 0;
                //en objeto paginador añadimos el where que definimos anteriormente
                $this->paginate = $where;
                //seteamos la variable a devolver a la vista index.ctp
		$this->set('variable_modelo', $this->Paginator->paginate());
?>
