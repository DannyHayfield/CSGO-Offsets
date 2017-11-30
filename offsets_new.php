<?php
class CsgoOffsets {
	public function __construct() {
		$this->offsets = file_get_contents("https://raw.githubusercontent.com/frk1/hazedumper/master/csgo.json");
		$this->offsetsArray = json_decode($this->offsets, true);
	}
	private function outputHex($value) {
		return "0x".strtoupper(dechex($value))."";
	}
	public function outputOffsets() {
		print "LocalPlayer=".$this->outputHex($this->offsetsArray['signatures']['dwLocalPlayer']).",".
		"EntityList=".$this->outputHex($this->offsetsArray['signatures']['dwEntityList']).",".
		"EnginePointer=".$this->outputHex($this->offsetsArray['signatures']['dwClientState']).",".
		"RadarBase=".$this->outputHex($this->offsetsArray['signatures']['dwRadarBase']).",".
		"iGameResource=".$this->outputHex($this->offsetsArray['signatures']['dwPlayerResource']).",".
		"ScoreBoardBase=".$this->outputHex($this->offsetsArray['signatures']['dwPlayerResource']).",".
		"Glowptr=".$this->outputHex($this->offsetsArray['signatures']['dwGlowObjectManager']).",".
		"jump=".$this->outputHex($this->offsetsArray['signatures']['dwForceJump']).",".
		"Glowindex=".$this->outputHex($this->offsetsArray['netvars']['m_iGlowIndex']).",".
		"m_iCompetitiveRanking=".$this->outputHex($this->offsetsArray['netvars']['m_iCompetitiveRanking']).",".
		"m_iCompetitiveWins=".$this->outputHex($this->offsetsArray['netvars']['m_iCompetitiveWins']).",".
		"m_bIsDormant=0xE9,".
		"c_dwBaseEntityPosition=".$this->outputHex($this->offsetsArray['netvars']['m_vecOrigin']).",".
		"viewAngelOff=".$this->outputHex($this->offsetsArray['signatures']['dwClientState_ViewAngles']).",".
		"m_iTeamNum=".$this->outputHex($this->offsetsArray['netvars']['m_iTeamNum']).",".
		"m_iHealth=".$this->outputHex($this->offsetsArray['netvars']['m_iHealth']).",".
		"m_iCrossHairID=".$this->outputHex($this->offsetsArray['netvars']['m_iCrosshairId']).",".
		"m_hActiveWeapon=".$this->outputHex($this->offsetsArray['netvars']['m_hActiveWeapon']).",".
		"m_iWeaponID=0x32E0,".
		"m_fFlashMaxAlpha=".$this->outputHex($this->offsetsArray['netvars']['m_flFlashMaxAlpha']).",".
		"m_bSpotted=".$this->outputHex($this->offsetsArray['netvars']['m_bSpotted']).",".
		"m_fFlags=".$this->outputHex($this->offsetsArray['netvars']['m_fFlags']).",".
		"m_aimPunchAngle=".$this->outputHex($this->offsetsArray['netvars']['m_aimPunchAngle']).",".
		"m_Local=".$this->outputHex($this->offsetsArray['netvars']['m_Local']).",".
		"BoneMatrix=".$this->outputHex($this->offsetsArray['netvars']['m_dwBoneMatrix']).",".
		"RadarPointer=".$this->outputHex($this->offsetsArray['signatures']['dwRadarBase']).",".
		"RadarHealth=0x20,".
		"RadarName=0x24,".
		"RadarSize=0x1E0,".
		"m_szLastPlaceName=".$this->outputHex($this->offsetsArray['netvars']['m_szLastPlaceName']).",".
		"m_angEyeAngles=0xB23C,".
		"m_iObserverMode=".$this->outputHex($this->offsetsArray['netvars']['m_iObserverMode'])."";
	}
}
$fetchOffsets = new CsgoOffsets;
$fetchOffsets->outputOffsets();
?>
