<?php
return [
    'view' => 'theme',
    'setting' => [
        'logo_title' => [
            '_type' => 'text',
            '_section' => '로고 설정',
            'label' => '로고 타이틀',
            'placeholder' => '로고 제목을 입력하세요',
            'description' => '로고 제목을 입력하세요',
        ],
        'gnb' => [
            '_type' => 'menu',
            '_section' => '메뉴 설정',
            'label' => '메인메뉴',
        ],
        'layout' => [
            '_type' => 'select',
            '_section' => '컬러셋 및 레이아웃 설정',
            'label' => '레이아웃',
            'options' => [
                'main' => '메인페이지용',
                'sub' => '서브페이지용',
                'full' => '가로 전체용'
            ]
        ],
        'footerMenu' => [
            '_type' => 'menu',
            '_section' => '푸터 설정',
            'label' => '푸터 메뉴 선택',
        ],
    ],
    'support' => [
        'mobile' => true,
        'desktop' => true
    ]
];
