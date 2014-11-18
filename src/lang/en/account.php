<?php

return array(

// account

	'address'					=> 'Address',
	'city'						=> 'City',
	'email'						=> 'Email',
	'first_name'				=> 'First Name',
	'logo'						=> 'Logo',
	'last_name'					=> 'Last Name',
	'middle_initial'			=> 'Middle Initial',
	'middle_name'				=> 'Middle Name',
	'name'						=> 'Name',
	'picture'					=> 'Picture',
	'prefix'					=> 'Prefix',
	'primary_email'				=> 'Primary Email',
	'primary_phone'				=> 'Primary Phone',
	'profile'					=> 'Profile',
	'secondary_email'			=> 'Secondary Email',
	'secondary_phone'			=> 'Secondary Phone',
	'state'						=> 'State',
	'suffix'					=> 'Suffix',
	'user'						=> 'User',
	'users'						=> 'Users',
	'username'					=> 'User Name',
	'user_profile'				=> 'User Profile',
	'website'					=> 'Web Site',
	'zipcode'					=> 'Zip Code',

	'last_login'				=> 'Last Login',
	'created_at'				=> 'Create Date',
	'updated_at'				=> 'Updated Date',

	'account' => array(
		'already_exists'		=> 'An account with the provided email, already exists.',
		'not_found'				=> 'This account could not be found.',
		'not_activated'			=> 'This account has not been activated.',
		'suspended'				=> 'This account has been suspended.',
		'banned'				=> 'This account has been banned.',
		'password_recovery'		=> 'Account Password Recovery',
		'wrong_password'		=> 'Wrong password, try again.',
		'password_required'		=> 'Password field is required.',
		'login_required'		=> 'Login field is required.',
	),

// ask
	'ask' => array(
		'activate'				=> 'Activate this User?',
		'ban'					=> 'Ban this user?',
		'deactivate'			=> 'Deactivate this User?',
		'delete_group'			=> 'Delete this group?',
		'delete_permission'		=> 'Delete this Permission?',
		'delete'				=> 'Delete this User?',
		'suspend'				=> 'Suspend this user?',
		'unban'					=> 'Unban this user?',
		'unsuspend'				=> 'Unsuspend this user?',
	),


// general
	'command' => array(
		'create'				=> 'Create New User',
		'update'				=> 'Update User',
		'edit'					=> 'Edit User',
		'delete'				=> 'Delete User',
		'add'					=> 'Add User',
		'view'					=> 'View User',
		'view_users'			=> 'View Users',
		'view_profile'			=> 'View Profile',
		'new'					=> 'New User',
	),

	'success' => array(
		'create'				=> 'The user was successfully created.',
		'update'				=> 'The user was successfully updated.',
		'delete'				=> 'The user was successfully deleted.',
		'ban'					=> 'The user was successfully banned.',
		'unban'					=> 'The user was successfully unbanned.',
		'suspend'				=> 'The user was successfully suspended.',
		'unsuspend'				=> 'The user was successfully unsuspended.',
		'restored'				=> 'The user was successfully restored.',
		'deactivate'			=> 'The user was successfully deactivated.',
		'activate'				=> 'The user was successfully activated.',
	),

	'error' => array(
		'create'				=> 'There was an issue creating the user. Please try again.',
		'update'				=> 'There was an issue updating the user. Please try again.',
		'delete'				=> 'There was an issue deleting the user. Please try again.',
		'denied'				=> 'That action is not permitted.',
		'exists'				=> 'The user already exists!',
		'not_exist'				=> 'The user [:id] does not exist.',
		'not_found'				=> 'The user was not found.',
		'deactivate'			=> 'There was an issue activating the user. Please try again.',
		'activate'				=> 'There was an issue activating the user. Please try again.',
		'logo'					=> 'No logo uploaded.',
	),

);
