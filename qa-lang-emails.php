<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
	korea translation made by minwook shin
	https://github.com/minwook-shin
*/

	return array(
		'a_commented_body' => "^site_title 에 올라간 당신의 답변에 ^c_handle 님의 댓글이 있습니다:\n\n^open^c_content^close\n\n당신의 답변입니다:\n\n^open^c_context^close\n\n자신의 의견을 추가하여 댓글을 쓸 수 있습니다:\n\n^url\n\n감사합니다,\n\n^site_title",
		'a_commented_subject' => '당신의 ^site_title 답변에 새 댓글이 있습니다',

		'a_followed_body' => "^site_title 에 올라간 당신의 답변이 ^q_handle 님의 질문과 비슷합니다:\n\n^open^q_title^close\n\n당신의 답변입니다:\n\n^open^a_content^close\n\n새로운 질문에 대한 답변은 아래를 클릭하십시오:\n\n^url\n\n감사합니다,\n\n^site_title",
		'a_followed_subject' => '당신의 ^site_title 답변과 관련 질문이 있습니다',

		'a_selected_body' => "축하드립니다! Your answer on ^site_title 의 당신의 답변이 ^s_handle 님에 의해서 최고 답변으로 선택되었습니다:\n\n^open^a_content^close\n\n질문입니다:\n\n^open^q_title^close\n\n답변을 보려면 아래를 클릭하십시오:\n\n^url\n\n감사합니다,\n\n^site_title",
		'a_selected_subject' => '당신의 ^site_title 답변이 선택되었습니다!',

		'c_commented_body' => "^c_handle 님의 새로운 댓글이 당신의 ^site_title 댓글에 추가되었습니다:\n\n^open^c_content^close\n\n다음은 토론 내용입니다:\n\n^open^c_context^close\n\n다른 댓글을 추가하여 대답 할 수 있습니다:\n\n^url\n\n감사합니다,\n\n^site_title",
		'c_commented_subject' => '당신의 ^site_title 댓글이 추가되었습니다',

		'confirm_body' => "귀하의 이메일 주소를 확인하기 위해 아래를 클릭하세요 ^site_title.\n\n^url\n\n감사합니다,\n^site_title",
		'confirm_subject' => '^site_title - 이메일 주소 확인',

		'feedback_body' => "내용:\n^message\n\n이름:\n^name\n\n이메일:\n^email\n\n이전 페이지:\n^previous\n\n유저:\n^url\n\nIP 주소:\n^ip\n\n브라우저:\n^browser",
		'feedback_subject' => '^ 피드백',

		'flagged_body' => "^p_handle 님께서 쓰신 글이 수신되었습니다. ^flags:\n\n^open^p_context^close\n\n게시물을 보려면 아래를 클릭하십시오:\n\n^url\n\n\n모든 플래그 게시물을 다시 보려면 아래를 클릭하십시오:\n\n^a_url\n\n\n감사합니다,\n\n^site_title",
		'flagged_subject' => '^site_title 플래그 게시물이 있습니다',

		'moderate_body' => "^p_handle 에 의한 게시물이 당신의 승인을 받아야합니다:\n\n^open^p_context^close\n\n승인하려면 아래를 클릭하거나 게시물을 거부하십시오:\n\n^url\n\n\n모든 대기중인 게시물을 다시 보려면 아래를 클릭하십시오:\n\n^a_url\n\n\n감사합니다,\n\n^site_title",
		'moderate_subject' => '^site_title 관리',

		'new_password_body' => "^site_title 에 대한 새 암호는 다음과 같습니다.\n\n비밀번호: ^password\n\n이 비밀번호는 바로 로그인 한 후 변경하는 것이 좋습니다.\n\n감사합니다,\n^site_title\n^url",
		'new_password_subject' => '^site_title - 당신의 새로운 비밀번호',

		'private_message_body' => "당신은 ^site_title 로 ^f_handle 님께 비밀 메세지를 보냈습니다:\n\n^open^message^close\n\n^more감사합니다,\n\n^site_title\n\n\n비밀 메시지를 차단, 계정 페이지를 방문하십시오:\n^a_url",
		'private_message_info' => "^f_handle 님에 대한 자세한 정보입니다:\n\n^url\n\n",
		'private_message_reply' => "개인 메시지로 ^f_handle 에게 댓글을 올리려면 아래를 클릭하십시오:\n\n^url\n\n",
		'private_message_subject' => '^site_title 에서 ^f_handle 으로부터 온 메시지입니다',

		'q_answered_body' => "^site_title 당신의 질문에 ^a_handle 님께서 답변하였습니다:\n\n^open^a_content^close\n\n당신의 질문입니다:\n\n^open^q_title^close\n\n이 대답을 좋아한다면, 최고로 선택할 수 있습니다:\n\n^url\n\n감사합니다,\n\n^site_title",
		'q_answered_subject' => '당신의 ^site_title 질문에 답변이 있습니다',

		'q_commented_body' => "^site_title 당신의 질문으로 ^c_handle 님께서 새로운 댓글을 달았습니다:\n\n^open^c_content^close\n\n당신의 질문입니다:\n\n^open^c_context^close\n\n당신은 자신의 의견으로 댓글을 추가할 수 있습니다:\n\n^url\n\n감사합니다,\n\n^site_title",
		'q_commented_subject' => '당신의 ^site_title 질문에 새로운 댓글이 있습니다',

		'q_posted_body' => "^q_handle 님께서 새로운 질문을 묻고 있습니다:\n\n^open^q_title\n\n^q_content^close\n\n질문을 보려면 아래를 클릭하십시오:\n\n^url\n\n감사합니다,\n\n^site_title",
		'q_posted_subject' => '^site_title 의 새로운 질문입니다',

		'remoderate_body' => "^p_handle 에 의해 편집 된 게시물은 재승인이 필요합니다:\n\n^open^p_context^close\n\n승인하거나 편집 한 게시물을 숨기려면 아래를 클릭하십시오:\n\n^url\n\n\n모든 대기중인 게시물을 다시 보려면 아래를 클릭하십시오:\n\n^a_url\n\n\n감사합니다,\n\n^site_title",
		'remoderate_subject' => '^site_title 관리',

		'reset_body' => "^site_title 에 대한 비밀번호를 재설정하시려면 아래를 클릭하세요.\n\n^url\n\n또한, 제공된 필드에 아래 코드를 입력합니다.\n\n코드: ^code\n\n비밀번호를 재설정하도록 요청하지 않은 경우, 이 메시지를 무시하십시오.\n\n감사합니다,\n^site_title",
		'reset_subject' => '^site_title - 잊어버린 비밀번호 초기화',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "^u_handle 새 사용자로 등록되었습니다.\n\n사용자 프로필을 보려면 아래를 클릭하십시오:\n\n^url\n\n감사합니다,\n\n^site_title",
		'u_to_approve_body' => "^u_handle 새 사용자로 등록되었습니다.\n\n사용자 승인은 아래를 클릭하십시오:\n\n^url\n\n모든 사용자가 승인을 기다리고 있습니다 검토하시려면 아래를 클릭하십시오:\n\n^a_url\n\n감사합니다,\n\n^site_title",
		'u_registered_subject' => '^site_title 새로운 등록 된 사용자가 있습니다.',

		'u_approved_body' => "당신은 여기에 새 유저 프로필을 볼 수 있습니다:\n\n^url\n\n감사합니다,\n\n^site_title",
		'u_approved_subject' => '당신은 이제 ^site_title 유저로 승인 되었습니다',

		'wall_post_subject' => '당신의 ^site_title 담벼락에 글이 쓰여졌습니다.',
		'wall_post_body' => "^f_handle 에서 유저 담벼락에 올렸습니다 ^site_title:\n\n^open^post^close\n\n이 게시물에 응답 할 수있습니다:\n\n^url\n\n감사합니다,\n\n^site_title",

		'welcome_body' => "^site_title 에 등록 해 주셔서 감사합니다.\n\n^custom^confirmYour 다음과 같이 로그인 세부 사항:\n\n유저이름: ^handle\n이메일: ^email\n\n나중에 참조 할 수 있도록 안전 정보를 보관하십시오.\n\n감사합니다,\n\n^site_title\n^url",
		'welcome_confirm' => "이메일 주소를 확인하기 위해 아래를 클릭하세요.\n\n^url\n\n",
		'welcome_subject' => '^site_title 에 오신 것을 환영합니다!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
