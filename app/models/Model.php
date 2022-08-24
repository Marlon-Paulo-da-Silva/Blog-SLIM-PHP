<?php

namespace app\models;

use app\database\Connection;

class Model {

  protected $connect;

  private $id;
    private $personID;
    private $realtyID;
    private $realtyMLID;
    private $statusQueue;
    private $processDate;
    private $insertDate;
    private $typeOperation;
    private $response;
    private $statusResponse;
    private $statusDescription;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPersonID()
    {
        return $this->personID;
    }

    /**
     * @param mixed $personID
     */
    public function setPersonID($personID): void
    {
        $this->personID = $personID;
    }

    /**
     * @return mixed
     */
    public function getRealtyID()
    {
        return $this->realtyID;
    }

    /**
     * @param mixed $realtyID
     */
    public function setRealtyID($realtyID): void
    {
        $this->realtyID = $realtyID;
    }

    /**
     * @return mixed
     */
    public function getRealtyMLID()
    {
        return $this->realtyMLID;
    }

    /**
     * @param mixed $realtyMLID
     */
    public function setRealtyMLID($realtyMLID): void
    {
        $this->realtyMLID = $realtyMLID;
    }

    /**
     * @return mixed
     */
    public function getStatusQueue()
    {
        return $this->statusQueue;
    }

    /**
     * @param mixed $statusQueue
     */
    public function setStatusQueue($statusQueue): void
    {
        $this->statusQueue = $statusQueue;
    }

    /**
     * @return mixed
     */
    public function getProcessDate()
    {
        return $this->processDate;
    }

    /**
     * @param mixed $processDate
     */
    public function setProcessDate($processDate): void
    {
        $this->processDate = $processDate;
    }

    /**
     * @return mixed
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }

    /**
     * @param mixed $insertDate
     */
    public function setInsertDate($insertDate): void
    {
        $this->insertDate = $insertDate;
    }


    /**
     * @return mixed
     */
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * @param mixed $typeOperation
     */
    public function setTypeOperation($typeOperation): void
    {
        $this->typeOperation = $typeOperation;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response): void
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getStatusResponse()
    {
        return $this->statusResponse;
    }

    /**
     * @param mixed $statusResponse
     */
    public function setStatusResponse($statusResponse): void
    {
        $this->statusResponse = $statusResponse;
    }

    /**
     * @return mixed
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * @param mixed $statusDescription
     */
    public function setStatusDescription($statusDescription): void
    {
        $this->statusDescription = $statusDescription;
    }


}