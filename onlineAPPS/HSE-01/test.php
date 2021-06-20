

<select name="valuation" onchange="champ_visible(this.value);"> 
<option value="0">Mono</option>
<option value="1">Multi</option>
</select>
<script>
function champ_visible(val)
{
	if(val==1)
	{
		document.getElementById('immat').style.visibility='visible';
		document.getElementById('immat').style.display='block';
	} else  {
		document.getElementById('immat').style.visibility='hidden';
		document.getElementById('immat').style.display='none';
	}
}
</script>
 
<div id="immat" style="visibility:hidden; display:none;">
	<p>
		<label class="auto">VPU_valeur : <span class="zone_champ_sasie">* </span></label>
		<input type="text" name="VPU_valeur" id="VPU_valeur" value="" size="30"/>
	</p>
</div>
