<?php

return [
    "login" => [
        "username_or_email" => "Ім'я користувача або електронна пошта",
        "forgot_password_link" => "Забули пароль?",
        "create_an_account" => "Створити обліковий запис",
    ],
    "two_factor" => [
        "heading" => "Двофакторна автентифікація",
        "description" => "Будь ласка, підтвердіть доступ, ввівши пароль із програми",
        "code_placeholder" => "XXX-XXX",
        "recovery" => [
            "heading" => "Двофакторна автентифікація",
            "description" => "Будь ласка, підтвердьте доступ, ввівши один із ваших кодів аварійного відновлення",
        ],
        "recovery_code_placeholder" => "abcdef-98765",
        "recovery_code_text" => "Втрачений пристрій?",
        "recovery_code_link" => "Використовувати код відновлення",
        "back_to_login_link" => "Повернутися до сторінки входу"
    ],
    "registration" => [
        "title" => "Реєстрація",
        "heading" => "Створити обліковий запис",
        "submit" => [
            "label" => "Надіслати",
        ],
        "notification_unique" => "Обліковий запис з такою адресою вже існує. Будь ласка, увійдіть"
    ],
    "reset_password" => [
        "title" => "Забули пароль",
        "heading" => "Скинути пароль",
        "submit" => [
            "label" => "Підтвердити",
        ],
        "notification_error" => "Помилка: повторіть спробу пізніше.",
        "notification_error_link_text"=>"Try Again",
        "notification_success" => "Перевірте свою поштову скриньку для отримання вказівок!",
        "email_not_found" => "Ми не можемо знайти користувача з такою адресою електронної пошти.",
    ],
    "verification" => [
        "title" => "Перевірити електронну пошту",
        "heading" => "Потрібно підтвердження електронної пошти",
        "submit" => [
            "label" => "Вийти",
        ],
        "notification_success" => "Перевірте поштову скриньку для отримання вказівок",
        "notification_resend" => "Лист із підтвердженням надіслано повторно.",
        "before_proceeding" => "Перш ніж продовжити, перевірте електронну пошту на наявність посилання для підтвердження.",
        "not_receive" => "Якщо ви не отримали електронного листа,",
        "request_another" => "Натисніть тут, щоб запросити повторно.",
    ],
    "profile" => [
        "account" => "Акаунт",
        "profile" => "Профіль",
        "my_profile" => "Мій Профіль",
        "personal_info" => [
            "heading" => "Особиста інформація",
            "subheading" => "Управління вашою особистою інформацією",
            "submit" => [
                "label" => "Оновити",
            ],
            "notify" => "Оновлення профілю успішно",
        ],
        "password" => [
            "heading" => "Пароль",
            "subheading" => "Має бути не менше 8 символів.",
            "submit" => [
                "label" => "Оновити",
            ],
            "notify" => "Пароль успішно оновлено",
        ],
        "2fa" => [
            "title" => "Двофакторна автентифікація",
            "description" => "Управління двофакторною автентифікацією для вашого облікового запису (рекомендується)",
            "actions" => [
                "enable" => "Увімкнути",
                "regenerate_codes"=>"Регенерувати коди",
                "disable"=>"Вимкнути",
                "confirm_finish" => "Підтвердити та завершити",
                "cancel_setup" => "Скасувати"
            ],
            "setup_key" => "Ключ налаштування",
            "not_enabled" => [
                "title" => "Ви не включили двофакторну автентифікацію",
                "description"=>"Якщо включена двофакторна автентифікація, вам буде запропоновано ввести безпечний токен під час автентифікації. Ви можете отримати цей токен з Google Authenticator"
             ],
            "finish_enabling" => [
                "title"=>"Завершити активацію двофакторної автентифікації.",
                "description" => "Щоб завершити активацію двофакторної автентифікації, відскануйте QR-код через програму для автентифікації або введіть ключ налаштування коду OTP"
            ],
            "enabled"=>[
                "title"=>"Ви включили двофакторну аутентифікацію",
                "description"=>"Двофакторна аутентифікація тепер увімкнена. Відскануйте наступний QR-код за допомогою програми для аутентифікації на телефоні або введіть ключ налаштування",
                "store_codes"=>"Збережіть ці коди відновлення в безпечному менеджері паролів. Їх можна використовувати для відновлення доступу до вашого облікового запису, якщо ваш пристрій двофакторної автентифікації втрачено.",
                "show_codes"=>"Показати коди відновлення",
                "hide_codes" => "Приховати коди відновлення"
            ],
            "confirmation" => [
                "success_notification" => "Code vérifié. Authentification à deux facteurs activée.",
                "invalid_code" => "Le code, що ти не віриш, що це не так вірно."
            ]
        ],
        "sanctum" => [
            "title" => "API Токени",
            "description" => "управління токенами API, які дозволяють стороннім службам отримувати доступ до цієї програми від вашого імені. ПРИМІТКА. Ваш токен відображається один раз при створенні. Якщо ви втратите свій токен, вам потрібно буде видалити його і створити новий",
            "create" => [
                "notify" => "Токен успішно створений",
                "submit" => [
                    "label" => "Створити",
                ],
            ],
            "update" => [
                "notify" => "Токен успішно оновлено",
            ],
        ],
    ],
    "fields" => [
        "email" => "E-mail",
        "login" => "Ім'я користувача",
        "name" => "Ім'я",
        "password" => "Пароль",
        "password_confirm" => "Підтвердження пароля",
        "new_password" => "Новий пароль",
        "new_password_confirmation" => "Підтвердження пароля",
        "token_name" => "Ім'я токена",
        "abilities" => "Доступ",
        "2fa_code" => "Код",
        "2fa_recovery_code" => "Код відновлення"
    ],
    "or" => "або",
    "cancel" => "Скасувати"
];
