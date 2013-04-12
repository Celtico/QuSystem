<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    /**
     *
     *
     * Configuration QuAdmin model and forms managing fast :P !!!!!!!!!!!!
     *
     *
     */
    'qu_users_model'=>array(
        /**
         *
         *
         * MODEL
         *
         *
         */

        'tableName'            => 'user',
        'tableLabel'           => 'User List',
        'tableKeyFields'       => array(

            'key_id'            => 'user_id',

            'key_title'         => 'username',
            'key_status'        => 'state',

            'key_name'          => 0,
            'key_date'          => 0,
            'key_modified'      => 0,
            'key_id_parent'     => 0,
            'key_order'         => 0,
            'key_lang'          => 0,
            'key_id_lang'       => 0,
            'key_level'         => 0,
            'key_path'          => 0,
            'key_id_author'     => 0,

        ),

        'tableFieldsCleanData'=> array(
             'user_id',
             'username',
             'email',
             'display_name',
             'password',
             'state',
        ),

        'linkerModels'      => false,
        'linkerParent'      => false,
        'defaultLanguage'   => false,
        'documents'         => false,
        'optionsOrder'      => false,

        'optionsPaginator'  => array('n'=>10,'p'=>1),


        /**
         *
         *
         * FORM
         *
         * example
         */
        'optionsForm' => array(


        /**
         * key group name
         * for example, a minimum description
         */
        'GroupCenter' => array(
            'serialized' => false,
            'fieldset'=> array(
                'type' =>'Zend\Form\Fieldset',
                'name' => 'content',
                'options' => array(
                    'label' => 'User',
                ),
            ),




                /**
                 * key form
                 * for example input name
                 */
                'state' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'state',
                        'options' => array(
                            'label' => 'State',
                            'value_options' => array(
                                1 => 'Published',
                                0 => '-',
                            ),
                        ),
                        'attributes' => array(
                            'type' => 'select',
                            'class'=>'fullwidth select',
                            'span'=>'span3',
                            'value' => 1,
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array('name'=> 'state','required' => false,),
                ),

                /**
                 * key
                 * for example input name
                 */
                'username' => array(
                    'form' => array(
                        'name'     => 'username',
                        'options' => array(
                            'label' => 'User Name',
                        ),
                        'attributes' => array(
                            'type'  => 'text',
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'username',
                        'required' => false,
                        'filters'  => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                    ),
                ),

                /**
                 * key form
                 * for example input name
                 */
                'email' => array(
                    'form' => array(
                        'name'     => 'email',
                        'options' => array('label' => 'Email'),
                        'attributes' => array(
                            'type'  => 'text',
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'email',
                        'required' => true,
                        'filters'  => array(),
                        'validators' => array(
                            array(
                                'name' => 'EmailAddress'
                            ),
                        ),
                    ),
                ),
                /**
                 * key form
                 * for example input name
                 */
                'display_name' => array(
                    'form' => array(
                        'name'     => 'display_name',
                        'options' => array(
                            'label' => 'Display Name'
                        ),
                        'attributes' => array(
                            'type'  => 'text',
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'display_name',
                        'required' => true,
                        'filters'  => array(),
                    ),
                ),

                'Password' => array(
                    'form' => array(
                        'name' => 'password',
                        'options' => array(
                            'label' => 'Password',
                        ),
                        'attributes' => array(
                            'type' => 'password'
                        ),
                    ),
                    'filter' => array(
                        'name'       => 'password',
                        'required'   => true,
                        'filters'    => array(array('name' => 'StringTrim')),
                        'validators' => array(
                            array(
                                'name'    => 'StringLength',
                                'options' => array(
                                    'min' => 6,
                                ),
                            ),
                        ),
                    ),
                ),

                'passwordVerify' => array(
                    'form' => array(
                        'name' => 'passwordVerify',
                        'options' => array(
                            'label' => 'Password Verify',
                        ),
                        'attributes' => array(
                            'type' => 'password'
                        ),
                    ),
                    'filter' => array(
                        'name'       => 'passwordVerify',
                        'required'   => true,
                        'filters'    => array(array('name' => 'StringTrim')),
                        'validators' => array(
                            array(
                                'name'    => 'StringLength',
                                'options' => array(
                                    'min' => 6,
                                ),
                            ),
                            array(
                                'name'    => 'Identical',
                                'options' => array(
                                    'token' => 'password',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        /**
         * Out config form
         */
        ),

    ),
);