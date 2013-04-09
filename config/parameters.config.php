<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    'qu_parameters_model' =>array(

        'tableName'            => 'qu-parameters',
        'tableLabel'           => 'Parameters',
        'entity'               => 'Parameters\Entity\Parameters',
        'tableKeyFields'       => array(

            'KeyId'            => 'id',
            'KeyName'          => 'name',
            'KeyTitle'         => 'title',
            'KeyIdAuthor'      => 'id_author',
            'KeyStatus'        => 'status',
            'KeyOrder'         => 'order',
            'KeyIdParent'      => false,

            'KeyIdLangLinker'  => false,
            'KeyLang'          => false,
            'KeyDate'          => false,
            'KeyModified'      => false,

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

            'FILED-SED'   => array(
                'serialized' => false,
                'fieldset' => array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'test-2',
                    'options' => array(
                        'label'=>'State'
                    ),
                    'attributes' => array(
                        'span' =>'span3',
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
                /**
                 * key form
                 * for example input name
                 */
                'statust' => array(
                        'form' => array(
                            'type' => 'Zend\Form\Element\Select',
                            'name'     => 'status',
                            'attributes' =>  array(
                                'options' => array(
                                    'Public'    =>'Public',
                                    'Previous'  =>'Previous',
                                    'Private'   =>'Private',
                                ),
                                'class'=>'fullwidth select',
                                'span'=>'span3',
                                'id'=>'select2',
                            ),
                            'options' => array(
                                'label' => 'Status',
                            ),

                        ),
                        'filter' => array(
                            'name'     => 'status',
                            'required' => false,
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