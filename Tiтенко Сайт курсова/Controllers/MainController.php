<?php
namespace Controllers;

use Models\Abonement;
use Models\User;
class MainController
{
    public function index($view = '')
    {
        if ($view) {
            /**
             * Якщо користувач залогінений то при переході на сторінки логін/реєстрація
             * перекидуємо його на головну сторінку так як немає потреби висвічувати сторінку логіну/реєстраціі
             */
            if (($view == 'login' || $view == 'registration') && !empty($_SESSION['user'])) {
                header('Location: /');
            } else {
                include "Views/{$view}.php";
            }
        }
    }
    
    public function login()
    {
        $user = new User();
        $loginUserArr = $user->login($_POST);
        
        if ($loginUserArr['isAdmin'] == true) {
            $_SESSION['user']['id'] = 0;
            $_SESSION['user']['fio'] = 'admin';
            header('Location: /admin');
        }
        
        $loginUser = $loginUserArr['user'];

        if (empty($loginUser)) {
            header('Refresh:2; url=/login');
            echo 'Не знайдено користувача, спробуйте ще. Вас буде перенаправлено через 2с';
        } else {
            $_SESSION['user']['id']   = $loginUser['id'];
            $_SESSION['user']['fio'] = $loginUser['fio'];

            header('Location: /accounts');
        }
    }

    public function registration()
    {
        $user = new User();
        $statusRegister = $user->registration($_POST);

        if ($statusRegister) {
            header('Location: /login');
        } else {
            header('Refresh:2; url=/reg');
            echo 'Помилка при реєстраціі, спробуйте ще. Вас буде перенаправлено через 2с';
        }
    }
    
    public function logout()
    {
        $user = new User();
        $user->logout();

        header('Location: /');
    }

    public function admin($view)
    {
        /**
         * Якщо юзер не адмін - редірект на головну сторінку
         */
        if (isset($_SESSION['user']) && $_SESSION['user']['fio'] == 'admin') {
            $orderObj = new Abonement();
            $abonements = $orderObj->getAbonements();
            include "Views/{$view}.php";
        } else {
            header('Refresh:1; url=/');             
            echo 'Ви не маєте доступ до адмінки. Вас буде перенаправлено через 1с';
        }
    }

    public function accounts($view)
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['fio'] != 'admin') {
            $user = $_SESSION['user'];
            $listAbonements = Abonement::TYPE_ABONEMENTS;

            $abonementObj = new Abonement();
            $userAbonements = $abonementObj->getAbonementsByUserId($user['id']);

            include "Views/{$view}.php";
        } else {
            header('Location: /login');
        }
    }

    public function create_abonement()
    {
        $orderObj = new Abonement();
        $status = $orderObj->create($_POST);

        if ($status) {
            header('Location: /accounts');
        } else {
            header('Refresh:1; url=/accounts');
            echo 'Помилка при бронюванні абонементу. Спробуйте ще раз.Вас буде перенаправлено через 1с';
        }
    }

    public function delete_abonement()
    {
        $id = $_GET['id'];

        $orderObj = new Abonement();
        $status = $orderObj->delete($id);

        if ($status) {
            header('Location: /accounts');
        } else {
            header('Refresh:2; url=/accounts');
            echo 'Помилка при видаленні абонемента. Спробуйте ще раз. Вас буде перенаправлено через 1с';
        }
    }

    public function delete_abonement_admin()
    {
        $id = $_GET['id'];

        $orderObj = new Abonement();
        $status = $orderObj->delete($id);

        if ($status) {
            header('Location: /admin');
        } else {
            header('Refresh:2; url=/admin');
            echo 'Помилка при видаленні абонемента. Спробуйте ще раз. Вас буде перенаправлено через 1с';
        }
    }
}