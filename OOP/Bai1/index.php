<?php
	class animals {
		var $type;
		var $name;
		var $color;
		var $going;
		var $food;

		function __construct($type, $name, $color, $going, $food) {
			$this->type = $type;
			$this->name = $name;
			$this->color = $color;
			$this->going = $going;
			$this->food = $food;
		}

		public function running() {
			if ($this->type == 'Dong vat co xuong song') {
				echo ($this->type . ' gom: chim, dong vat co vu, luong cu, bo sat, va ca.');
			} else if ($this->type == 'Dong vat than mem') {
				echo ($this->type . ' gom: trai, hau, bach tuoc, muc va oc sen.');
			} else if ($this->type == 'Dong vat chan khop') {
				echo ($this->type . ' gom: cuon chieu, ret, con trung, nhen, bo cap va tom.');
			} else if ($this->type == 'Giun dot') {
				echo ($this->type . ' gom: giun dat, dia.');
			} else {
				echo ($this->type. ' gom: khong xac dinh.');
			}
		}

		function eating() {
			echo ("Thuc an cua loai " . $this->name . " la: " . $this->food);
		}
	}


	class person extends animals {

	}

	class child extends person {

	}

	
	$voi = new animals("Dong vat co xuong song", "Voi", "Nau", "Di bang 4 chan", "Co");
	$voi->running();
	$voi->eating();
	echo '<br />';

	$nguoi = new person("Dong vat co xuong song", "Con nguoi", "Da sac", "Di bang 2 chan", "Da dang");
	$nguoi->running();
	$nguoi->eating();
	echo '<br />';

	$treem = new person("Dong vat co xuong song", "Dua Tre", "Da sac", "Di bang 2 chan", "Da dang");
	$treem->running();
	$treem->eating();
?>