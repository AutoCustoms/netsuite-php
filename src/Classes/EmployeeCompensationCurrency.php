<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class EmployeeCompensationCurrency {
    static $paramtypesmap = array(
    );
    const _aed = "_aed";
    const _afa = "_afa";
    const _afn = "_afn";
    const _all = "_all";
    const _amd = "_amd";
    const _ang = "_ang";
    const _aoa = "_aoa";
    const _ars = "_ars";
    const _aud = "_aud";
    const _awg = "_awg";
    const _azn = "_azn";
    const _bam = "_bam";
    const _bbd = "_bbd";
    const _bdt = "_bdt";
    const _bgn = "_bgn";
    const _bhd = "_bhd";
    const _bif = "_bif";
    const _bmd = "_bmd";
    const _bnd = "_bnd";
    const _bob = "_bob";
    const _brl = "_brl";
    const _bsd = "_bsd";
    const _btn = "_btn";
    const _bwp = "_bwp";
    const _byn = "_byn";
    const _byr = "_byr";
    const _bzd = "_bzd";
    const _cad = "_cad";
    const _cdf = "_cdf";
    const _chf = "_chf";
    const _clp = "_clp";
    const _cny = "_cny";
    const _cop = "_cop";
    const _crc = "_crc";
    const _csd = "_csd";
    const _cuc = "_cuc";
    const _cup = "_cup";
    const _cve = "_cve";
    const _cyp = "_cyp";
    const _czk = "_czk";
    const _djf = "_djf";
    const _dkk = "_dkk";
    const _dop = "_dop";
    const _dzd = "_dzd";
    const _ecs = "_ecs";
    const _eek = "_eek";
    const _egp = "_egp";
    const _ern = "_ern";
    const _etb = "_etb";
    const _eur = "_eur";
    const _fjd = "_fjd";
    const _fkp = "_fkp";
    const _gbp = "_gbp";
    const _gel = "_gel";
    const _ggp = "_ggp";
    const _ghc = "_ghc";
    const _ghs = "_ghs";
    const _gip = "_gip";
    const _gmd = "_gmd";
    const _gnf = "_gnf";
    const _gtq = "_gtq";
    const _gyd = "_gyd";
    const _hkd = "_hkd";
    const _hnl = "_hnl";
    const _hrk = "_hrk";
    const _htg = "_htg";
    const _huf = "_huf";
    const _idr = "_idr";
    const _ils = "_ils";
    const _imp = "_imp";
    const _inr = "_inr";
    const _iqd = "_iqd";
    const _irr = "_irr";
    const _isk = "_isk";
    const _jep = "_jep";
    const _jmd = "_jmd";
    const _jod = "_jod";
    const _jpy = "_jpy";
    const _kes = "_kes";
    const _kgs = "_kgs";
    const _khr = "_khr";
    const _kmf = "_kmf";
    const _kpw = "_kpw";
    const _krw = "_krw";
    const _kwd = "_kwd";
    const _kyd = "_kyd";
    const _kzt = "_kzt";
    const _lak = "_lak";
    const _lbp = "_lbp";
    const _lkr = "_lkr";
    const _lrd = "_lrd";
    const _lsl = "_lsl";
    const _ltl = "_ltl";
    const _lvl = "_lvl";
    const _lyd = "_lyd";
    const _mad = "_mad";
    const _mdl = "_mdl";
    const _mfg = "_mfg";
    const _mga = "_mga";
    const _mkd = "_mkd";
    const _mmk = "_mmk";
    const _mnt = "_mnt";
    const _mop = "_mop";
    const _mro = "_mro";
    const _mru = "_mru";
    const _mtl = "_mtl";
    const _mur = "_mur";
    const _mvr = "_mvr";
    const _mwk = "_mwk";
    const _mxn = "_mxn";
    const _myr = "_myr";
    const _mzm = "_mzm";
    const _mzn = "_mzn";
    const _nad = "_nad";
    const _ngn = "_ngn";
    const _nio = "_nio";
    const _nok = "_nok";
    const _npr = "_npr";
    const _nzd = "_nzd";
    const _omr = "_omr";
    const _pab = "_pab";
    const _pen = "_pen";
    const _pgk = "_pgk";
    const _php = "_php";
    const _pkr = "_pkr";
    const _pln = "_pln";
    const _pyg = "_pyg";
    const _qar = "_qar";
    const _rol = "_rol";
    const _ron = "_ron";
    const _rsd = "_rsd";
    const _rub = "_rub";
    const _rur = "_rur";
    const _rwf = "_rwf";
    const _sar = "_sar";
    const _sbd = "_sbd";
    const _scr = "_scr";
    const _sdd = "_sdd";
    const _sdg = "_sdg";
    const _sek = "_sek";
    const _sgd = "_sgd";
    const _shp = "_shp";
    const _sit = "_sit";
    const _skk = "_skk";
    const _sll = "_sll";
    const _sos = "_sos";
    const _spl = "_spl";
    const _srd = "_srd";
    const _srg = "_srg";
    const _ssp = "_ssp";
    const _std = "_std";
    const _stn = "_stn";
    const _svc = "_svc";
    const _syp = "_syp";
    const _szl = "_szl";
    const _thb = "_thb";
    const _tjs = "_tjs";
    const _tmm = "_tmm";
    const _tmt = "_tmt";
    const _tnd = "_tnd";
    const _top = "_top";
    const _trl = "_trl";
    const _try = "_try";
    const _ttd = "_ttd";
    const _tvd = "_tvd";
    const _twd = "_twd";
    const _tzs = "_tzs";
    const _uah = "_uah";
    const _ugx = "_ugx";
    const _usd = "_usd";
    const _uyu = "_uyu";
    const _uzs = "_uzs";
    const _veb = "_veb";
    const _vef = "_vef";
    const _ves = "_ves";
    const _vnd = "_vnd";
    const _vuv = "_vuv";
    const _wst = "_wst";
    const _wsx = "_wsx";
    const _xaf = "_xaf";
    const _xag = "_xag";
    const _xau = "_xau";
    const _xcd = "_xcd";
    const _xdr = "_xdr";
    const _xof = "_xof";
    const _xop = "_xop";
    const _xpd = "_xpd";
    const _xpf = "_xpf";
    const _xpt = "_xpt";
    const _yer = "_yer";
    const _yum = "_yum";
    const _zar = "_zar";
    const _zmk = "_zmk";
    const _zmw = "_zmw";
    const _zrn = "_zrn";
    const _zwd = "_zwd";
    const _zwl = "_zwl";
}
