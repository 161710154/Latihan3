<?php
class bagundatar {
	public $panjang,$lebar;
	function set_nilai($bilangan1,$bilangan2){
		$this->panjang = $bilangan1;
		$this->lebar = $bilangan2;
	}
	function get_nilai1(){
		return $this->panjang * $this->lebar;
	}
	function get_nilaikll(){
		return ($this->panjang + $this->lebar)*2;
	}
}
$bagundatar1= new bagundatar;
$bagundatar1->set_nilai(24,7);
echo "Luas persegi panjang P*L = ".$bagundatar1->get_nilai1().'<br>';

echo "Keliling persegi panjang (P+L)*2 = ".$bagundatar1->get_nilaikll().' m'.'<br>';

class persegi {
	public $sisi1,$sisi2;
	function set_nilai($bilangan1,$bilangan2){
		$this->sisi1 = $bilangan1;
		$this->sisi2 = $bilangan2;
	}
	function get_nilai2(){
		return $this->sisi1 * $this->sisi2;
	}
	function get_nilaikllpersegi(){
		return $this->sisi1*4;
	}
}
$persegi1= new persegi;
$persegi1->set_nilai(24,7);
echo "Luas persegi s*s = ".$persegi1->get_nilai2().'<br>';
echo "Keliling persegi (s+s+s+s) atau s*4 = ".$persegi1->get_nilaikllpersegi().'<br>';

class segitiga {
	public $alas,$tinggi,$b;
	function set_nilai($bilangan1,$bilangan2,$bilangan3){
		$this->alas = $bilangan1;
		$this->tinggi = $bilangan2;
		$this->b = $bilangan3;
	}
	function get_nilai3(){
		return $this->alas * $this->tinggi/2;
	}
	function get_nilaikllsegitiga(){
		return $this->alas + $this->tinggi + $this->b;
	}
}
$segitiga1= new segitiga;
$segitiga1->set_nilai(6,8,10);
echo "Luas segitiga a*t/2 = ".$segitiga1->get_nilai3().'<br>';
echo "Luas segitiga sisi1+sisi2+sisib = ".$segitiga1->get_nilaikllsegitiga();


?>