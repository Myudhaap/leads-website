<?php

namespace leadsWeb\models;

class Lead
{
    private $id;
    private $tanggal;
    private $id_sales;
    private $id_product;
    private $no_wa;
    private $nama_lead;
    private $kota;

    public function __construct($id, $tanggal, $id_sales, $id_product, $no_wa, $nama_lead, $kota)
    {
        $this->id = $id;
        $this->tanggal = $tanggal;
        $this->id_sales = $id_sales;
        $this->id_product = $id_product;
        $this->no_wa = $no_wa;
        $this->nama_lead = $nama_lead;
        $this->kota = $kota;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }

    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    public function getIdSales()
    {
        return $this->id_sales;
    }

    public function setIdSales($id_sales)
    {
        $this->id_sales = $id_sales;
    }

    public function getIdProduct()
    {
        return $this->id_product;
    }

    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;
    }

    public function getNoWa()
    {
        return $this->no_wa;
    }

    public function setNoWa($no_wa)
    {
        $this->no_wa = $no_wa;
    }

    public function getNamaLead()
    {
        return $this->nama_lead;
    }

    public function setNamaLead($nama_lead)
    {
        $this->nama_lead = $nama_lead;
    }

    public function getKota()
    {
        return $this->kota;
    }

    public function setKota($kota)
    {
        $this->kota = $kota;
    }


}