<?php




//$women = $_POST['Women'];


if (isset($_POST['name'], $_POST['surname'], $_POST['birthDate']) && $_POST['name'] !== '' && $_POST['surname'] !== '' && $_POST['birthDate'] !== '')
{
    echo 'Имя - ' . $_POST['name'] . '<br/>';
    echo 'Фамилия - ' . $_POST['surname'] . '<br/>';
    echo 'Дата рождения - ' . $_POST['birthDate'] . '<br/>';
}

if (isset($_POST['Men']) && $_POST['Men'] === 'on' )
{
    echo 'Пол - Мужской';
} 
    else if(isset($_POST['Women']) && $_POST['Women'] === 'on' && $_POST['Women'] !== '')
    {
        echo 'Пол - Женский';  
    }




