<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    'qu_translator_model' =>array(

        'tableName'            => 'qu-translator',
        'tableLabel'           => 'Translator',
        'entity'               => 'QuAdminMecamaq\Entity\QuObject',
        'tableKeyFields'       => array(

            'key_id'            => 'id_translator',
            'key_id_parent'     => 'id_parent',
            'key_id_lang'       => 'id_lang',
            'key_lang'          => 'lang',
            'key_name'          => 'name',
            'key_title'         => 'title',
            'key_id_author'     => 'id_author',
            'key_status'        => 'status',
            'key_order'         => 'order',

            'key_date'          => 0,
            'key_modified'      => 0,
            'key_level'         => 0,
            'key_path'          => 0,
            'key_icon'          => 0,

        ),

        'tableFieldsCleanData'=> array(
            'id_translator',
            'id_parent',
            'id_author',
            'id_lang',
            'order',
            'name',
            'title',
            'status',
            'lang',
        ),

        'linkerModels'      => array(),
        'linkerParent'      => 1,
        'optionsPaginator'  => array(
            'n'=>10,
            'p'=>1
        ),
        'defaultLanguage'   => 'es',
        'documents'         => false,
        'optionsOrder'      => 'order desc',
        'optionsForm' => array(

            /**
             * Basic form
             *
             * key group name
             * for example, a minimum description
             */
            'GroupRight'  => array(
                'serialized' => false,
                'fieldset' => array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'parametres',
                    'options' => array(
                        'label'=>'Parametres'
                    ),
                    'attributes' => array(
                        'span' =>'span3',
                        ////'class' =>'fieldset-collapse',
                    ),
                ),

                /**
                 * key form
                 * for example input name
                 */
                'status' => array(
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'status',
                        'options' => array(
                            'label' => 'Status',
                        ),
                        'attributes' =>  array(
                            'options' => array(
                                'Public'    =>'Public',
                                'Private'   =>'Private',
                            ),
                            'class'=>'fullwidth select',
                            'span'=>'span3',

                        ),


                    ),
                    'filter' => array(
                        'name'     => 'status',
                        'required' => false,
                    ),
                ),
            ),
            'GroupLinkers' => array(
                'serialized' => false,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'linkers',
                    'options' => array(
                        'label' => 'Linkers',
                    ),
                    'attributes' => array(
                        'span' =>'span3',
                        ////'class' =>'fieldset-collapse',
                    ),
                ),
                /**
                 * Add set Attributes options on database
                 *
                 * key
                 * for example input name
                 */
                'id_parent' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'id_parent',
                        'options' => array(
                            'label' => 'Parent',
                        ),
                        'attributes' => array(
                            'options' => array(),
                            'type' => 'select',
                            'class'=>'fullwidth select',
                            'span'=>'span3',
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array(
                        'name'=> 'id_parent',
                        'required' => false,
                    ),

                    'attributes' => array(
                        'name' => 'id_parent',
                        'database' => 'qu_parameters_model',
                        'fieldKeyName' => 'id',
                        'fieldKeyLabel' => 'title',
                        'fieldKeyLabelParent' => true,
                        'where' => '',
                        'order' => '',
                        'default'  => array(0 => '-'),
                    ),
                ),
            ),
            'FILED-SED-PARAMS'   => array(
                    'serialized' => false,
                    'fieldset' => array(
                        'type' =>'Zend\Form\Fieldset',
                        'name' => 'test',
                        'options' => array(
                            'label'=>'Content'
                        ),
                        'attributes' => array(
                            //'span' =>'span3',
                        ),
                    ),

                    'title' => array(
                        //form zf2 standard for reused
                        'form' => array(
                            'name'     => 'title',
                            'options' => array('label' => 'Title'),
                            'attributes' => array(
                                'type'  => 'text',
                                'class'=>'span12',
                            ),
                        ),
                        //filter zf2 standard for reused
                        'filter' => array(
                            'name'     => 'title',
                            'required' => true,

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
                                'class'=> 'span12',
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


            ),
        ),
    ),

);