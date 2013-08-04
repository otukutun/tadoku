<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {


    function beforeFilter() {
        $this->Auth->allow(array('opauth_complete', 'index'));
        parent::beforeFilter();
    }
    public function opauth_complete() {
        $user_id = $this->User->auth_update($this->data['auth']['raw']['id'],$this->data['auth']['raw']['screen_name'],$this->data['auth']['credentials']['token'],$this->data['auth']['credentials']['secret']);
        if ($this->Auth->login(array('token' => $this->data['auth']['credentials']['token'],'secret' => $this->data['auth']['credentials']['secret'])) && $user_id != null) {
            $this->Session->write('user_id',$user_id);
            $this->redirect(array('action' => 'mypage'));
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

    public function mypage() {
        
        $user = $this->User->find('first',array('conditions' => array('id' => $this->Session->read('user_id')),'fields' => array('total_words','username')));
        $this->set('user',$user);

    }

    public function index() {
        debug($this->Session->read('test2'));
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }


}
