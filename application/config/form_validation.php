<?php 
$config = array(
	'tutor_registration' => array(
		array(
			'field' => 'name',
			'label' => 'Name',
			'rules' => 'trim|xss_clean|required|min_length[3]|regex_match[/^([a-zA-Z-_ ])+$/i]|max_length[50]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'fname',
			'label' => 'Father\'s Name',
			'rules' => 'trim|xss_clean|required|min_length[3]|regex_match[/^([a-zA-Z-_ ])+$/i]|max_length[50]',
			'errors' => array(
				'required' => 'You must provide your %s.',
			),
		),
		array(
			'field' => 'gender',
			'label' => 'Gender',
			'rules' => 'trim|xss_clean|required',
			'errors' => array(
				'required' => 'You must provide your %s.',
			),
		),
		array(
			'field' => 'termsandconditions',
			'label' => 'Terms and Conditions',
			'rules' => 'trim|xss_clean|required',
			'errors' => array(
				'required' => 'You have to agree to %s.',
			),
		),
		array(
			'field' => 'experience',
			'label' => 'Experience',
			'rules' => 'trim|xss_clean|required',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'city',
			'label' => 'City',
			'rules' => 'trim|xss_clean|required',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|xss_clean|required|valid_email|max_length[50]',
			'errors' => array(
				'required' => 'You must provide an %s.',
			),
		),
		array(
			'field' => 'phone',
			'label' => 'Phone',
			'rules' => 'trim|xss_clean|required|min_length[11]|max_length[14]|numeric',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'altphone',
			'label' => 'Alternate Phone',
			'rules' => 'trim|xss_clean|required|min_length[11]|max_length[14]|numeric',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'cnic',
			'label' => 'CNIC',
			'rules' => 'trim|xss_clean|required|exact_length[13]|numeric',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|xss_clean|required|min_length[8]|max_length[30]|regex_match[/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,30}$/]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'cpassword',
			'label' => 'Confirm Password',
			'rules' => 'trim|xss_clean|required|matches[password]',
			'errors' => array(
				'required' => 'You must provide Confirmation Password.',
			),
		),
		array(
			'field' => 'maddress',
			'label' => 'Mailing Address',
			'rules' => 'trim|xss_clean|required|max_length[200]|min_length[20]',
			'errors' => array(
				'required' => 'You must provide your %s',
			),
		),
		array(
			'field' => 'paddress',
			'label' => 'Permanent Address',
			'rules' => 'trim|xss_clean|required|max_length[200]|min_length[20]',
			'errors' => array(
				'required' => 'You must provide your %s.',
			),
		)
	),

	'login' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|xss_clean|required|valid_email|max_length[50]',
			'errors' => array(
				'required' => 'You must provide an %s.',
			),
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|xss_clean|required|min_length[8]|max_length[30]|regex_match[/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,30}$/]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		)
	)/*,
	'login' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|xss_clean|required|valid_email|max_length[50]',
			'errors' => array(
				'required' => 'You must provide an %s.',
			),
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|xss_clean|required|min_length[8]|max_length[30]|regex_match[/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,30}$/]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		)
	),
	'change_password' => array(
		array(
			'field' => 'old-password',
			'label' => 'Password',
			'rules' => 'trim|xss_clean|required|min_length[8]|max_length[30]|regex_match[/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,30}$/]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'new-password',
			'label' => 'Password',
			'rules' => 'trim|xss_clean|required|min_length[8]|max_length[30]|regex_match[/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,30}$/]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'confirm-new-password',
			'label' => 'Password',
			'rules' => 'trim|xss_clean|required|matches[new-password]',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
	)*/
);