<?php 
namespace App\Service;
class TranslationFiles
{
    public static $language = 'ru';
    public static function set_public_text():array{

        $lines = [];
        $russian = [
            'main_page' => "Главная Cтраница",
            'log/reg' => "Вход/Регистрация",
            'panel' => "Панель",
            'my_profile' => "Мой профиль",
            'instructions' => "Инструкция",
            'language' => "Язык",
            'mode' => "Тема",
            'light' => "светлая",
            'dark' => "темная",
            
        ];
        $english = [
            'main_page' => "Main Page",
            'log/reg' => "Sign up/Sing in",
            'panel' => "Panel",
            'my_profile' => "My Profile",
            'instructions' => "Instruction",
            'language' => "Language",
            'mode' => "Mode",
            'light' => "light",
            'dark' => "dark",
        ];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
    public static function set_profile_text():array{

        $lines = [];
        $russian = [
            'your_resumes' => "Ваши Резюме",
            'exit' => "Выход",
            'delete' => "Удалить",
            
            
        ];
        $english = [
             'your_resumes' => "Your Resume's",
            'exit' => "Log out",
            'delete' => "delete",
        ];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
    public static function set_registration_text():array{

        $lines = [];
        $russian = [
            'sign_up' => "Регистрация",
            'nickname' => "Придумайте Nickname",
            'email' => "Почта",
            'pass_instructions' => "Пароль более 8 символов",
            'phone' => "Номер телефона",
            'submit' => "Подтвердить",
            
        ];
        $english = [
            'sign_up' => "Sign up",
            'nickname' => "Nickname",
            'email' => "Email",
            'pass_instructions' => "Password (more than 8 symbols)",
            'phone' => "Phone",
            'submit' => "Submit",
        ];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
    public static function set_choice_text():array{

        $lines = [];
        $russian = [
            'sign_up' => "Регистрация",
            'sign_in' => "Вход",
            
        ];
        $english = [
            'sign_up' => "Sign up",
            'sign_in' => "Sign in",
        ];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
    public static function set_login_text():array{

        $lines = [];
        $russian = [
            'sign_in' => "Вход",
            'name_or_email' => "Имя или почта",
            'forgot' => "Забыл пароль",
            
        ];
        $english = [
            'sign_in' => "Sign in",
            'name_or_email' => "Nickname or email",
            'forgot' => "Forgot my password",
        ];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
    public static function set_index_text():array{

        $lines = [];
        $russian = [
            'my_name' => "Моё имя",
            'file_choice' => "Выбрать файл",
            'first_name' => "Имя",
            'middle_name' => "Отчество",
            'second_name' => "Фамилия",
            'looking_for' => "Я ищу...",
            'des_position' => "Желаемая должность",
            'des_salary' => "Желаемая зарплата",
            'full_time' => 'Полная',
            'part_time_j' => 'Частичная',
            'seasonal' => 'Сезонная',
            'projects' => 'Проектная',
            'internship' => 'Стажировка',
            'remote' => 'Удаленная работа',
            'volunteer' => 'Волонтерство',
            'side_job' => 'Временная работа',
            'full_day' => 'Полный день',
            'part_time' => 'Неполный день',
            'rotating_shifts' => 'Сменный график',
            'flexible_schedule' => 'Гибкий график',
            'non_standard_schedule' => 'Ненормированный',
            'fly_in_fly_out' => 'Вахта',
            'contact_info' => 'Контактная информация',
            'phone' => 'Телефон',
            'email' => 'Почта',
            'personal_info' => 'Личная информация',
            'city_of_residence' => 'Город проживания',
            'married' => 'Женат/Замужем',
            'not_married' => 'Холост/Не замужем',
            'has_kids' => 'У меня есть дети',
            'citizenship' => 'Гражданство',
            'male' => 'Муж.',
            'female' => 'Жен.',
            'hidden' => 'Cкрыть',
            'high_school' => 'Основное общее',
            'college' => 'Среднее',
            'bachelour' => 'Бакалавр',
            'master' => 'Магистр',
            'phd' => 'Кандидат наук',
            'dr' => 'Доктор наук',
            'experience' => 'Опыт работы',
            'from:' => 'От: ',
            'to:' => 'До: ',
            'delete' => 'Удалить',
            'add' => 'Добавить',
            'certifications' => 'Сертификации/Курсы',
            'studied' => 'Название учебного заведения',
            'for_what' => 'Специальность',
            'for_how_long' => 'Продолжительность',
            'finished' => 'Окончил(а): ',
            'education' => 'Образование',
            'full_time_education' => 'Очно',
            'part_time_education' => 'Очно-заочно',
            'distance1' => 'Заочно',
            'distance2' => 'Дистанционно',
            'faculty' => 'Факультет',
            'languages' => 'Иностранный язык',
            'a1' => 'A1 - начальный',
            'a2' => 'A2 - элементарный',
            'b1' => 'B1 - средний',
            'b2' => 'B2 - средне-продвинутый',
            'c1' => 'C1 - продвинутый',
            'c2' => 'C2 - в совершенстве',
            'a1s' => 'Начальный',
            'a2s' => 'Элементарный',
            'b1s' => 'Средний',
            'b2s' => 'Средне-продвинутый',
            'c1s' => 'Продвинутый',
            'c2s' => 'В совершенстве',
            'pc_skills' => 'Навыки владения компьютером',
            'extra' => 'Дополнительная информация',
            'military' => 'Служба в армии',
            'med' => ' Наличие действующей медкнижки',
            'driver_license' => 'Водительские права',
            'A' => ' А - Мотоциклы',
            'B' => ' В - Легковые автомобили',
            'C' => ' С - Грузовые автомобили',
            'D' => ' D - Автобусы',
            'E' => 'Е - Автомобили с прицепом',
            'personal_char' => 'Личные качетсва',
            'professional_char' => 'Профессиональные качетсва',
            'im_social' => 'Я социальный...',
            'im_precise' => 'Я пунктуальный...',
            'social_links' => 'Ссылки на соцсети',
            'language' => 'Язык',
            'pos_you_had' => 'Должность, которую вы занимали',
            'org' => 'Название организации',
            'resp_and_ach' => 'Обязанности и достижения',
            'make' => 'Создать',
        ];
        $english = [
    'my_name' => "My name",
    'file_choice' => "Choose file",
    'first_name' => "First name",
    'middle_name' => "Middle name",
    'second_name' => "Last name",
    'looking_for' => "I am looking for...",
    'des_position' => "Desired position",
    'des_salary' => "Desired salary",
    'full_time' => 'Full-time',
    'part_time_j' => 'Part-time',
    'seasonal' => 'Seasonal',
    'projects' => 'Project-based',
    'internship' => 'Internship',
    'remote' => 'Remote work',
    'volunteer' => 'Volunteering',
    'side_job' => 'Temporary work',
    'full_day' => 'Full day',
    'part_time' => 'Part-time',
    'rotating_shifts' => 'Rotating shifts',
    'flexible_schedule' => 'Flexible schedule',
    'non_standard_schedule' => 'Irregular hours',
    'fly_in_fly_out' => 'Fly-in fly-out (FIFO)',
    'contact_info' => 'Contact information',
    'phone' => 'Phone',
    'email' => 'Email',
    'personal_info' => 'Personal information',
    'city_of_residence' => 'City of residence',
    'married' => 'Married',
    'not_married' => 'Single',
    'has_kids' => 'I have children',
    'citizenship' => 'Citizenship',
    'male' => 'Male',
    'female' => 'Female',
    'hidden' => 'Hide',
    'high_school' => 'Secondary education',
    'college' => 'Сollege',
    'bachelour' => 'Bachelor',
    'master' => 'Master',
    'phd' => 'PhD',
    'dr' => 'Doctor',
    'experience' => 'Work experience',
    'from:' => 'From: ',
    'to:' => 'To: ',
    'delete' => 'Delete',
    'add' => 'Add',
    'certifications' => 'Certifications/Courses',
    'studied' => 'Educational institution',
    'for_what' => 'Major/Specialty',
    'for_how_long' => 'Duration',
    'finished' => 'Graduated: ',
    'education' => 'Education',
    'full_time_education' => 'Full-time',
    'part_time_education' => 'Part-time (hybrid)',
    'distance1' => 'Correspondence',
    'distance2' => 'Distance learning',
    'faculty' => 'Faculty',
    'languages' => 'Foreign language',
    'a1' => 'A1 - Beginner',
    'a2' => 'A2 - Elementary',
    'b1' => 'B1 - Intermediate',
    'b2' => 'B2 - Upper-intermediate',
    'c1' => 'C1 - Advanced',
    'c2' => 'C2 - Proficient',
    'a1s' => 'Beginner',
    'a2s' => 'Elementary',
    'b1s' => 'Intermediate',
    'b2s' => 'Upper-intermediate',
    'c1s' => 'Advanced',
    'c2s' => 'Proficient',
    'pc_skills' => 'Computer skills',
    'extra' => 'Additional information',
    'military' => 'Military service',
    'med' => ' Valid medical certificate',
    'driver_license' => 'Driver\'s license',
    'A' => ' A - Motorcycles',
    'B' => ' B - Passenger cars',
    'C' => ' C - Trucks',
    'D' => ' D - Buses',
    'E' => 'E - Trailers',
    'personal_char' => 'Personal qualities',
    'professional_char' => 'Professional skills',
    'im_social' => 'I am sociable...',
    'im_precise' => 'I am punctual...',
    'social_links' => 'Social media links',
    'language' => 'Language',
    'pos_you_had' => 'Position you occupied',
    'org' => 'Organisation name',
    'resp_and_ach' => 'Responsibilities and achievements',
    'make' => 'Create!',
];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
    public static function set_recovery_text():array{

        $lines = [];
        $russian = [
            'recovery' => "Восстанволение Пароля",
            'enter_email' => "Введите свою почту",
            'submit' => "Подтвердить",
            'user_not_found' => "Пользователя с такой почтой не сущестувет",
            
        ];
        $english = [
            'recovery' => "Password recovery",
            'enter_email' => "Enter your email",
            'submit' => "Submit",
            'user_not_found' => "User with set email does not exist",
        ];
    switch (self::$language) {
    case 'ru':
        $lines = $russian;
        break;
        
        case 'en':
        $lines = $english;
        break;
}
        return $lines;
    }
}


$language = 'ru';
$lines = [];




?>