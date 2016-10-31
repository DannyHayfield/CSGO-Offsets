<?php
ob_start("ob_gzhandler");

$offsets = "";
$offsets .= "LocalPlayer=0xA8F53C".",";				//LocalPlayer / m_dwLocalPlayer
$offsets .= "EntityList=0x4AB0EF4".",";				//EntityList / m_dwEntityList
$offsets .= "EnginePointer=0x5C22C4".",";			//EnginePointer / m_dwClientState
$offsets .= "RadarBase=0x4EE5CCC".",";				//RadarBase / m_dwRadarBase
$offsets .= "iGameResource=0x2E8CCCC".",";			//iGameResource
$offsets .= "ScoreBoardBase=0x2E8CCCC".",";			//ScoreBoardBase
$offsets .= "Glowptr=0x4FC8B04".",";				//m_dwGlowObject
$offsets .= "jump=0x4F47A34".",";					//m_dwForceJump
$offsets .= "Glowindex=0xA320".",";					//m_iGlowIndex
$offsets .= "m_iCompetitiveRanking=0x1A44".",";			//m_iCompetitiveRanking
$offsets .= "m_iCompetitiveWins=0x1B48".",";			//m_iCompetitiveWins
$offsets .= "m_bIsDormant=0xE9".",";				//m_bDormant
$offsets .= "c_dwBaseEntityPosition=0x134".",";			//m_vecOrigin
$offsets .= "viewAngelOff=0x4D0C".",";				//m_dwViewAngles
$offsets .= "m_iTeamNum=0xF0".",";					//m_iTeamNum
$offsets .= "m_iHealth=0xFC".",";					//m_iHealth
$offsets .= "m_iCrossHairID=0xAA64".",";			//m_iCrossHairID
$offsets .= "m_hActiveWeapon=0x2EE8".",";			//m_hActiveWeapon
$offsets .= "m_iWeaponID=0x2F88".",";				//m_iItemDefinitionIndex (!!NO LONGER m_iWeaponID)
$offsets .= "m_fFlashMaxAlpha=0xA304".",";			//m_flFlashMaxAlpha
$offsets .= "m_bSpotted=0x939".",";					//m_bSpotted
$offsets .= "m_fFlags=0x100".",";					//m_fFlags
$offsets .= "m_aimPunchAngle=0x70".",";				//m_aimPunchAngle / m_vecPunch (!!0x70 always)
$offsets .= "m_Local=0x2FAC".",";					//m_Local
$offsets .= "BoneMatrix=0x2698".",";				//m_dwBoneMatrix
$offsets .= "RadarPointer=0x50".",";				//RadarPointer
$offsets .= "RadarHealth=0x20".",";					//RadarHealth
$offsets .= "RadarName=0x24".",";					//RadarName
$offsets .= "RadarSize=0x1E0".",";					//RadarSize
$offsets .= "m_szLastPlaceName=0x35A8".",";			//m_szLastPlaceName
$offsets .= "m_angEyeAngles=0xA9FC"."";				//m_angEyeAngles

echo trim($offsets);
?>