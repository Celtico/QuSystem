<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    'qu_languages_model' =>array(

        'tableName'            => 'qu-languages',
        'tableLabel'           => 'Languages',
        'entity'               => 'QuSystem\Entity\Languages',
        'tableKeyFields'       => array(

            'key_id'            => 'id',
            'key_name'          => 'name',
            'key_title'         => 'title',
            'key_id_author'     => 'id_author',
            'key_status'        => 'status',
            'key_order'         => 'order',

            'key_id_parent'     => 0,
            'key_id_lang'       => 0,
            'key_lang'          => 0,
            'key_date'          => 0,
            'key_modified'      => 0,
            'key_level'         => 0,
            'key_path'          => 0,
            'key_icon'          => 0,

        ),

        'tableFieldsCleanData'=> array(
            'id',
            'id_author',
            'order',
            'name',
            'title',
            'status',
        ),

        'linkerModels'      => false,
        'linkerParent'      => false,
        'optionsPaginator'  => array(
            'n'=>10,
            'p'=>1
        ),
        'defaultLanguage'   => false,
        'documents'         => false,
        'optionsOrder'      => 'order desc',

        'optionsForm' => array(

            'GroupMeta'   => array(
                'serialized' => false,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'meta',
                    'options' => array(
                        'label' => 'Data'),
                    'attributes' => array(
                        //'grid' =>'grid3',
                    ),
                ),

                'name' => array(
                    'form' => array(
                        'name'     => 'name',
                        'options' => array(
                            'label' => 'Name',
                        ),
                        'attributes' => array(
                            'type'  => 'text',
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'name',
                        'required' => false,
                        'filters'  => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name'    => 'StringLength',
                                'options' => array(
                                    'encoding' => 'UTF-8',
                                    'min'      => 1,
                                    'max'      => 200,
                                ),
                            ),
                        ),
                    ),
                ),

                'title' => array(
                    'form' => array(
                        'name'     => 'title',
                        'options' => array(
                            'label' => 'Title',
                        ),
                        'attributes' => array(
                            'type'  => 'text',
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'title',
                        'required' => true,
                        'filters'  => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name'    => 'StringLength',
                                'options' => array(
                                    'encoding' => 'UTF-8',
                                    'min'      => 1,
                                ),
                            ),
                        ),
                    ),
                ),
            ),
                'Params'   => array(
                    'serialized' => false,
                    'fieldset'=> array(
                        'type' =>'Zend\Form\Fieldset',
                        'name' => 'Paramssss',
                        'options' => array(
                            'label' => 'Params'),
                        'attributes' => array(
                            'span'=>'span3',
                        ),
                    ),


                'status' => array(
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'status',
                        'options' => array(
                            'label' => 'Status',
                            'value_options' => array(
                                'Public'    =>'Public',
                                'Previous'  =>'Previous',
                                'Private'   =>'Private',
                            ),
                        ),
                        'attributes' => array(
                            'type' => 'select',
                            'class'=>'fullwidth select',
                            'span'=>'span3',
                            'id'=>'select2'
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'status',
                        'required' => false,
                    ),
                ),
            ),
        ),
    ),

);