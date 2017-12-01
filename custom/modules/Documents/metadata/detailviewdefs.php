<?php
$viewdefs ['Documents'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
        ),
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_document_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'displayParams' => 
            array (
              'link' => 'filename',
              'id' => 'document_revision_id',
            ),
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => 'Document status for Meta-Data framework',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'revision',
            'label' => 'LBL_DOC_VERSION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'category_type_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY_TYPE',
          ),
          1 => 
          array (
            'name' => 'subcategory_id',
            'label' => 'LBL_SF_SUBCATEGORY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'template_type',
            'label' => 'LBL_DET_TEMPLATE_TYPE',
          ),
          1 => 
          array (
            'name' => 'is_template',
            'label' => 'LBL_DET_IS_TEMPLATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'active_date',
            'label' => 'LBL_DOC_ACTIVE_DATE',
          ),
          1 => 
          array (
            'name' => 'exp_date',
            'label' => 'LBL_DOC_EXP_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'related_doc_name',
            'comment' => 'The related document name for Meta-Data framework',
            'label' => 'LBL_DET_RELATED_DOCUMENT',
          ),
          1 => 
          array (
            'name' => 'related_doc_rev_number',
            'comment' => 'The related document version number for Meta-Data framework',
            'label' => 'LBL_DET_RELATED_DOCUMENT_VERSION',
          ),
        ),
      ),
      'LBL_REVISIONS_PANEL' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'last_rev_created_name',
            'label' => 'LBL_LAST_REV_CREATOR',
          ),
          1 => 
          array (
            'name' => 'last_rev_create_date',
            'label' => 'LBL_LAST_REV_CREATE_DATE',
          ),
        ),
      ),
    ),
  ),
);
?>
