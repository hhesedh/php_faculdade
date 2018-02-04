<?php 
function calculaAno($ano) {
	if ($ano % 400 == 0) {
		return 366;
	} else if ($ano % 100 == 0) {
		return 365;
	} else if ($ano % 4 == 0) {
		return 366;
	}
	return 365;
}

echo calculaAno(2010);
?>
// ^(\d+[-+/*]\d+)*$;