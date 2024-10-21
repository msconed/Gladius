<?php

namespace App\Helpers;

use PDO;


class ArmaServerDB
{
    public static function totalPlayers()
    {
        try {
            $pdo = self::getPDO();
            $sql = 'SELECT COUNT(*) FROM players';
    
            $sth = $pdo->query($sql)->fetch();
            return $sth[0];
        } catch (\Exception $e) {
            return 0;
        }

    }

    public static function getPDO()
    {
        $ARMA_SERVER_DB_USER="exile";
        $ARMA_SERVER_DB_PASSWORDS="";
        $ARMA_SERVER_DB_ADDRES="localhost";
        $ARMA_SERVER_DB_TABLENAME="svodb";
        $ARMA_SERVER_DB_DSN="mysql:host=$ARMA_SERVER_DB_ADDRES;dbname=$ARMA_SERVER_DB_TABLENAME;charset=utf8";

        // $pdo = new PDO(config('armaserver.pdo_dsn'), config('armaserver.db_user'), config('armaserver.db_password'));

        return new PDO($ARMA_SERVER_DB_DSN, $ARMA_SERVER_DB_USER, $ARMA_SERVER_DB_PASSWORDS);

    }

    public static function getKillsStatistics($steamid)
    {
        try {
            $pdo = self::getPDO();

            $stmt = $pdo->prepare('SELECT * FROM statistics WHERE steamid = :steamid');
            $stmt->execute(['steamid' => $steamid]);
    
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (\Exception $e) {
            $data = [];
        }
        return $data;
    }

    public static function getDonatSets()
    {
        try {
            $pdo = self::getPDO();

            $sql = "SHOW COLUMNS FROM rolesaccess";
    
            $sth = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            $sth = [];
        }

        return $sth;
    }
    public static function updateDonatSet($steamid, $itemName, $mode)
    {
        $success = true;
        try {
            $pdo = self::getPDO();
            $stmt = $pdo->prepare("UPDATE rolesaccess SET `$itemName` = :mode WHERE steamid = :steamid");
            $stmt->bindParam(':mode', $mode);
            $stmt->bindParam(':steamid', $steamid);
            if (!$stmt->execute()) {
                $success = false;
            }
        } catch (\Exception $e) {
            $success = false;
        }
    
        return $success;
    }
    
    public static function isCreatedUser($steamid)
    {
        try {
            $pdo = self::getPDO();
            $stmt = $pdo->prepare("SELECT * FROM rolesaccess WHERE steamid=?");
            $stmt->execute([$steamid]);
            return $stmt->rowCount() > 0;
        } catch (\PDOException $e) {
            return false;
        }
    }
    


    public static function getBans()
    {
        try {
            $pdo = self::getPDO();

            $sql = 'SELECT uid as steamid, name, reason, time_until FROM bans';
    
            $sth = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            $sth = [];
        }

        return $sth;
    }

    public static function checkUserBan($steamid)
    {
        $pdo = self::getPDO();



        $stmt = $pdo->prepare('SELECT * FROM bans WHERE uid = :steamid');
        $stmt->execute(['steamid' => $steamid]);

        $banData = $stmt->fetch(PDO::FETCH_ASSOC);

        return $banData; 
    }


};

