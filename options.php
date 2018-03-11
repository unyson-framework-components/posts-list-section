<?php if (!defined('FW')) die('Forbidden');

$args=array(
    'public'   => true,
    '_builtin' => false
);
$output = 'objects'; // names or objects, note names is the default
$operator = 'and'; // 'and' or 'or'
$post_types=get_post_types( $args, $output, $operator );
$choice_args = array(
    'post' => 'Posts'
);
foreach ($post_types  as $post_type ) {
    $choice_args[$post_type->name] = $post_type->label;
}

$options = array(
    'title'=>array(
        'type' => 'text',
        'label' => __('Title',''),
    ),
    'desc'=>array(
        'type' => 'text',
        'label' => __('Description',''),
    ),
    'select_post' => array(
        'type'  => 'select',
        'label' => __('Post type', ''),
        'desc'  => __('Select post type for show', ''),
        'choices' =>$choice_args
    ),
    'post_per_page' =>array(
        'type'  => 'text',
        'value' => '-1',
        'label' => __('Posts per page', ''),
        'desc'  => __('Enter count of posts(number)', ''),
        'help'  => __('For showing all post enter -1', ''),
    )
);