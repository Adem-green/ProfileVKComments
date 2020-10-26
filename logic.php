<?php

$data = [
    'user' => [
        'first_name' => 'JOHN ',
        'last_name' => 'DOE',
        'position' => 'Software Engineer & UI/UX Expert email',
        'about' => 'Рыбным текстом называется текст, служащий для временного наполнения макета в публикациях или производстве веб-сайтов, пока финальный текст еще не создан. Рыбный текст также известен как текст-заполнитель или же текст-наполнитель. Иногда текст-«рыба» также используется композиторами при написании музыки. Они напевают его перед тем, как сочинены соответствующие слова. Уже в 16-том веке рыбные тексты имели широкое распространение у печатников.',
        'avatar' => '/images/avatar.jpg.',
    ],

    'page' => [
        'title' => 'ВК',
        'cover' => '/images/fon2.jpg.',
        'comment_block_title' => 'Комментарии',
        'comment_text_placeholder' => 'Ваш комментарии...',
        'comment_btn_caption' => 'Отправить',
        'auth_subtitle' => 'Для продолжения вам необходимо войти',
        'auth_subtitle_2' => 'ВКонтакте',
        'auth_login_caption' => 'Телефон или email',
        'auth_password_caption' => 'Пароль',
        'auth_btn_caption' => 'Войти',

    ],

    'comments' => [

        [
            'first_name' => 'Тлеген ',
            'last_name' => 'Кустобаев',
            'avatar' => 'images/comment-1.jpg',
            'comment' => 'Прикольно',
            'string_date' => 'Три часа назад',
        ],

        [
            'first_name' => 'Владислав ',
            'last_name' => 'Смирнов',
            'avatar' => 'images/comment-2.jpg',
            'comment' => 'Это типо резюме?',
            'string_date' => 'Вчера',
        ],

        [
            'first_name' => 'Анжелика ',
            'last_name' => 'Зайцева',
            'avatar' => 'images/comment-3.jpg',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto asperiores, commodi, cum debitis enim expedita inventore minima minus molestiae perferendis provident sequi tenetur? Blanditiis corporis eos iure neque saepe!',
            'string_date' => '5 минут назад',
        ],

        [
            'first_name' => 'Иван ',
            'last_name' => 'Черных',
            'avatar' => 'images/comment-4.jpg',
            'comment' => 'Не думал что это сработает',
            'string_date' => '2 секунды назад',
        ],

        [
            'first_name' => 'Вадим ',
            'last_name' => 'Валеев',
            'avatar' => 'images/comment-5.jpg',
            'comment' => 'Неправильно!!!',
            'string_date' => '5 минут назад',
        ],
    ],
];

$data['comments_count'] = sizeof($data ['comments']);
//print_array($data);

?>
