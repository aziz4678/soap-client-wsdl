<?php
error_reporting(1);
class Client
{   private $api;

    public function __construct($uri)
    {   $this->api = new SoapClient($uri);
        unset($uri);

    }
    

    public function tampil_semua_data()
    {   $data = $this->api->tampil_semua_data();
        return $data;
        unset($data);

    }

    public function tampil_data($id_barang)
    {   $data = $this->api->tampil_data($id_barang);
        return $data;
        unset($id_barang,$data);

    }
    public function tambah_data($data)
    {   $data = $this->api->tambah_data($data);
        return $data;
        unset($data);

    }

    public function ubah_data($data)
    {   $this->api->ubah_data($data);
        unset($data);
    }

    public function hapus_data($id_barang)
    {   $this->api->hapus_data($id_barang);
        unset($id_barang);
    }
    public function __destruct()
    {
        unset($this->api);
    }

}

$uri = "http://192.168.56.136/wsdl-toko/server1/server.php?wsdl";
$abc = new Client($uri);
?>