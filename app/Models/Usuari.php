<?php

namespace App\Models;

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{


    protected $table = 'usuari';

    protected $primaryKey = 'USUARI_ConsInte__b';

    protected $fillable = [
        'USUARI_Codigo____b',
        'USUARI_Clave_____b',
        'USUARI_Nombre____b',
        'USUARI_Cargo_____b',
        'USUARI_ConsInte__PERUSU_b',
        'USUARI_InMoCoPa__b',
        'USUARI_InPeToGu__b',
        'USUARI_IndPerCap_b',
        'USUARI_IndPerRep_b',
        'USUARI_InPeMoPo__b',
        'USUARI_Identific_b',
        'USUARI_UsuaTele__b',
        'USUARI_ClavTele__b',
        'USUARI_ConsInte__TURNOS_b',
        'USUARI_ClaSalLla_b',
        'USUARI_LlavExte__b',
        'USUARI_IndiActi__b',
        'USUARI_NaciAnno__b',
        'USUARI_NaciMes___b',
        'USUARI_NaciDia___b',
        'USUARI_SegConVen_b',
        'USUARI_SegDiaVen_b',
        'USUARI_LonMinCon_b',
        'USUARI_RepConDia_b',
        'USUARI_SegFecCon_b',
        'USUARI_Bloqueado_b',
        'USUARI_FechCrea__b',
        'USUARI_UsuaCrea__b',
        'USUARI_ConsInte__PROYEC_b',
        'USUARI_Foto______b',
        'USUARI_UsuaCBX___b',
        'USUARI_ConsInte__USUPER_b',
        'USUARI_PerCamCam_b',
        'USUARI_Correo___b',
        'USUARI_passCorreo_b',
        'USUARI_HorIniLun_b',
        'USUARI_HorFinLun_b',
        'USUARI_HorIniMar_b',
        'USUARI_HorFinMar_b',
        'USUARI_HorIniMie_b',
        'USUARI_HorFinMie_b',
        'USUARI_HorIniJue_b',
        'USUARI_HorFinJue_b',
        'USUARI_HorIniVie_b',
        'USUARI_HorFinVie_b',
        'USUARI_HorIniSab_b',
        'USUARI_HorFinSab_b',
        'USUARI_HorIniDom_b',
        'USUARI_HorFinDom_b',
        'USUARI_HorIniFes_b',
        'USUARI_HorFinFes_b'
    ];

}
