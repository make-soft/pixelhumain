<?php
/*
- system notifications are saved in the notification collection
- citizen Notifications are saved in the citizen collection under the notification node
 */
class Notification
{
    const NOTIFICATION_LOGIN	               = "citizenLogin";
    const NOTIFICATION_REGISTER	               = "citizenRegister";
    const NOTIFICATION_COMMUNECTED             = "citizenCommunected";
    const NOTIFICATION_ACTIVATED	           = "citizenActivated";
    const NOTIFICATION_INVITATION	           = "citizenInvitation";
    const NOTIFICATION_LINK_REQUEST            = "citizenLinkRequest";
    const NOTIFICATION_LINK_CONFIRMATION       = "citizenLinkConfirmation";

    const NOTIFICATION_FRIEND_REQUEST          = "friendRequest";
    
    // A Citizen Notificaiton is saved in the Citizen Collection
    public static function saveCitizenNotification($params) {
        // TODO : je comprends pas comment le citoyen en cours est positionné dans la requete ?
        Yii::app()->mongodb->citoyens->update(array("_id" => new MongoId($params['notifyUser'])), 
                                                  array('$push' => array( Citoyen::NODE_NOTIFICATIONS => $notification )));
    }

    // An Admin Notification is saved in the Notifications collection
    public static function saveAdministratorNotification($params) {
        Yii::app()->mongodb->notifications->insert($params); 
    }
}