<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Covid19 extends CI_Controller
{

	public function index()
	{
		// $lokasi	= json_decode(file_get_contents('https://covid19-public.digitalservice.id/analytics/longlat/'), TRUE);
		$lokasi = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), TRUE);
		$indo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'), TRUE);
		$prov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), TRUE);
		// $host = json_decode(file_get_contents('https://bokusan.my.id/api/hospital'),TRUE);
		$data = array(
			'title'	=>	'Perkembangan Corona',
			'main'	=>	'home/index',
			'lokasi' => $lokasi,
			'indo'	=> $indo,
			'prov'	=> $prov,

		);
		$this->load->view('template/template', $data, FALSE);
	}

	public function global()
	{
		$lokasi = json_decode(file_get_contents('https://api.kawalcorona.com/'), TRUE);
		$glob_pos = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), TRUE);
		$glob_semb = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), TRUE);
		$glob_meni = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), TRUE);
		$data = array(
			'title'	=>	'Perkembangan Corona',
			'main'	=>	'home/global',
			'glob_pos'	=> $glob_pos,
			'glob_semb'	=> $glob_semb,
			'glob_meni'	=> $glob_meni,
			'lokasi'	=> $lokasi,
		);
		$this->load->view('template/template', $data, FALSE);
	}
	public function kasus()
	{
		$data = json_decode(file_get_contents('https://corona.elpida.my.id/api/detail'), TRUE);
		$data_array = array(
			'main'	=> 'home/kasus',
			'datalist' => $data
		);
		$this->load->view('template/template', $data_array);
	}

	public function kab()
	{
		$data = json_decode(file_get_contents('https://covid19-public.digitalservice.id/analytics/longlat/'), TRUE);
		$data_array = array(
			'datalist' => $data,
			'isi'	=> 'home/kab',
		);
		$this->load->view('template/template', $data_array, FALSE);
	}

	public function wilayah()
	{
		$data = json_decode(file_get_contents('https://covid19-public.digitalservice.id/analytics/longlat/'), TRUE);

		echo "$data";
		// $data_array = array(
		//     	'main'	=> 'home/wilayah',
		//     	'datalist' => $data,

		//     );
		//     $this->load->view('template/template',$data_array, FALSE);
	}

	public function peta()
	{
		$lokasi = json_decode(file_get_contents('https://api.kawalcorona.com/'), TRUE);
		$data = array(
			'lokasi'	=> $lokasi,
		);
		$this->load->view('peta', $data, FALSE);
	}
}
