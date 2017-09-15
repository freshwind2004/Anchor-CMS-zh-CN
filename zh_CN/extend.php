<?php

return array(

	'extend' => '扩展',

	'fields' => '自定义项目',
	'fields_desc' => '创建新的项目',

	'pagetypes' => '站点页面类型',
	'pagetypes_desc' => '创建新的页面类型',

	'variables' => '站点变量',
	'variables_desc' => '创建新的站点元数据',

	'create_field' => '创建新自定义项',
	'editing_custom_field' => '编辑自定义项 &ldquo;%s&rdquo;',
	'nofields_desc' => '没有自定义项',

	'create_variable' => '创建新变量',
	'editing_variable' => '编辑变量 &ldquo;%s&rdquo;',
	'novars_desc' => '没有变量',

	'create_pagetype' => '创建新页面类型',
	'editing_pagetype' => '编辑页面类型 &ldquo;%s&rdquo;',

	// form fields
	'type' => '类型',
	'type_explain' => '你要添加此字段的内容类型',
	'notypes_desc' => 'No page types yet',

	'pagetype' => '页面类型',
	'pagetype_explain' => '你要添加此字段的内容类型',

	'field' => '自定义项',
	'field_explain' => '支持Html',

	'key' => '唯一值',
	'key_explain' => '你的字段的唯一值',
	'key_missing' => '请输入唯一值',
	'key_exists' => '唯一值已占用',

	'label' => '标签',
	'label_explain' => '可读名称',
	'label_missing' => '请输入标签',

	'attribute_type' => '文件类型',
	'attribute_type_explain' => '可接受文件类型列表，用英文逗号（,）分开，留空则接受所有类型',

	// images
	'attributes_size_width' => '文件最大宽度',
	'attributes_size_width_explain' => '如果大于最大宽度，图像将被调小',

	'attributes_size_height' => '文件最大高度',
	'attributes_size_height_explain' => '如果大于最大高度度，图像将被调小',

	// custom vars
	'name' => '名称',
	'name_explain' => '唯一的名称',
	'name_missing' => '请输入唯一名称',
	'name_exists' => '名称已被占用',

	'value' => '变量值',
	'value_explain' => '你想要存储的数据 (不超过 64kb)',
	'value_code_snipet' => '将要插入的Snippet <br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => '变量已创建',
	'variable_updated' => '变量已更新',
	'variable_deleted' => '变量已删除',

	'pagetype_created' => '页面类型已创建',
	'pagetype_updated' => '页面类型已更新',
	'pagetype_deleted' => '页面类型已删除',

	'field_created' => '自定义项已创建',
	'field_updated' => '自定义项已更新',
	'field_deleted' => '自定义项已删除'

);
