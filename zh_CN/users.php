<?php

return array(

	'users' => '用户',

	'create_user' => '创建新用户',
	'add_user' => '增加一个新用户',
	'editing_user' => '编辑 %s&rsquo;s 资料',
	'remembered' => '我知道密码',
	'forgotten_password' => '忘记密码？',

	// roles
	'administrator' => '管理员',
	'administrator_explain' => '',

	'editor' => '编辑',
	'editor_explain' => '',

	'user' => '用户',
	'user_explain' => '',

	// form fields
	'real_name' => '真名',
	'real_name_explain' => '',

	'bio' => '个人简介',
	'bio_explain' => '',

	'status' => '状态',
	'status_explain' => '',

	'role' => '角色',
	'role_explain' => '',

	'username' => '用户名',
	'username_explain' => '',
	'username_missing' => '请输入用户名，至少需要 %s 个字符',

	'password' => '密码',
	'password_explain' => '',
	'password_too_short' => '密码不少于 %s 个字符',

	'new_password' => '新密码',

	'email' => 'Email',
	'email_explain' => '',
	'email_missing' => '请输入有效的电邮地址',
	'email_not_found' => '档案未找到',

	// messages
	'updated' => '用户档案已更新',
	'created' => '用户档案已创建',
	'deleted' => '用户档案已删除',
	'delete_error' => '你无法删除自己的档案',
	'login_error' => '用户名或密码错误',
	'logout_notice' => '你已登出',
	'recovery_sent' => '你的密码已更改，我们已发送了一封邮件通知你',
	'recovery_expired' => '密码恢复Token已过期，请重新申请',
	'password_reset' => '你的新密码已经设置好了，请登录',

	// password recovery email
	'recovery_subject' => '密码重设',
	'recovery_message' => '你要求重设密码' .
		'请点击这个链接重设密码.' . PHP_EOL . '%s',

);