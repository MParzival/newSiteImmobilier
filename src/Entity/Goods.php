<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goods
 *
 * @ORM\Table(name="goods", indexes={@ORM\Index(name="TypeBien", columns={"TypeBien"}), @ORM\Index(name="CodePostal", columns={"CodePostal"}), @ORM\Index(name="LoyerAnnuel", columns={"LoyerAnnuel"}), @ORM\Index(name="Categorie", columns={"Categorie"}), @ORM\Index(name="VisitCounter", columns={"VisitCounter"}), @ORM\Index(name="TypeTransact", columns={"TypeTransact"}), @ORM\Index(name="bNaxos", columns={"bNaxos"}), @ORM\Index(name="Activite", columns={"Activite"}), @ORM\Index(name="PrixPublic", columns={"PrixPublic"}), @ORM\Index(name="SurfaceTotale", columns={"SurfaceTotale"}), @ORM\Index(name="NbPiecesLogement", columns={"NbPiecesLogement"}), @ORM\Index(name="Top", columns={"Top"}), @ORM\Index(name="Statut", columns={"Statut"})})
 * @ORM\Entity
 */
class Goods
{
    /**
     * @var int
     *
     * @ORM\Column(name="idGoods", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGoods;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodeReseau", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $codereseau = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="CodeAgence", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $codeagence = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateEntree", type="string", length=10, nullable=true)
     */
    private $dateentree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateUpdate", type="string", length=10, nullable=true)
     */
    private $dateupdate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Statut", type="boolean", nullable=true)
     */
    private $statut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateRetrait", type="string", length=10, nullable=true)
     */
    private $dateretrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TitreAnnonce", type="text", length=16777215, nullable=true)
     */
    private $titreannonce;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Annonce", type="text", length=16777215, nullable=true)
     */
    private $annonce;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Top", type="boolean", nullable=true)
     */
    private $top;

    /**
     * @var int
     *
     * @ORM\Column(name="TypeTransact", type="smallint", nullable=false)
     */
    private $typetransact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TypeBien", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $typebien;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumeroMurs", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $numeromurs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Negociateur", type="string", length=40, nullable=true)
     */
    private $negociateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Denomination", type="string", length=40, nullable=false)
     */
    private $denomination;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumVoie", type="string", length=10, nullable=true)
     */
    private $numvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TypeVoie", type="string", length=20, nullable=true)
     */
    private $typevoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomVoie", type="string", length=40, nullable=true)
     */
    private $nomvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SuiteAdresse", type="string", length=40, nullable=true)
     */
    private $suiteadresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodePostal", type="string", length=5, nullable=true)
     */
    private $codepostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ville", type="string", length=30, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone", type="string", length=14, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax", type="string", length=14, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uidVendeur", type="string", length=15, nullable=true)
     */
    private $uidvendeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uidAdministrateur", type="string", length=15, nullable=true)
     */
    private $uidadministrateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uidMandataire", type="string", length=15, nullable=true)
     */
    private $uidmandataire;

    /**
     * @var string
     *
     * @ORM\Column(name="Activite", type="string", length=100, nullable=false)
     */
    private $activite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PrixPublic", type="integer", nullable=true)
     */
    private $prixpublic;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Licence", type="boolean", nullable=true)
     */
    private $licence;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=2, nullable=false, options={"fixed"=true})
     */
    private $categorie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DroitAuBail", type="integer", nullable=true)
     */
    private $droitaubail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TypeBail", type="string", length=40, nullable=true)
     */
    private $typebail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateFinBail", type="string", length=10, nullable=true)
     */
    private $datefinbail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LoyerAnnuel", type="integer", nullable=true)
     */
    private $loyerannuel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPiecesLogement", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbpieceslogement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescriptifLogement", type="string", length=40, nullable=true)
     */
    private $descriptiflogement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Quartier", type="string", length=100, nullable=true)
     */
    private $quartier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FermetureHebdo", type="string", length=40, nullable=true)
     */
    private $fermeturehebdo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Horaires", type="string", length=40, nullable=true)
     */
    private $horaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CongesAnnuel", type="string", length=40, nullable=true)
     */
    private $congesannuel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbEmployes", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbemployes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbSaisonniers", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbsaisonniers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SurfaceTotale", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $surfacetotale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailSurfaces", type="text", length=16777215, nullable=true)
     */
    private $detailsurfaces;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="BienAngle", type="boolean", nullable=true)
     */
    private $bienangle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LineaireFacade", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $lineairefacade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EtatLieux", type="string", length=40, nullable=true)
     */
    private $etatlieux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EtatMateriel", type="string", length=40, nullable=true)
     */
    private $etatmateriel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHT", type="integer", nullable=true)
     */
    private $caht;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AchatHT", type="integer", nullable=true)
     */
    private $achatht;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ChargesExternes", type="integer", nullable=true)
     */
    private $chargesexternes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Salaires", type="integer", nullable=true)
     */
    private $salaires;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ChargesSociales", type="integer", nullable=true)
     */
    private $chargessociales;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RBE", type="integer", nullable=true)
     */
    private $rbe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uidComptable", type="string", length=15, nullable=true)
     */
    private $uidcomptable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DroitEntree", type="integer", nullable=true)
     */
    private $droitentree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LoyerPossible", type="integer", nullable=true)
     */
    private $loyerpossible;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Divisible", type="boolean", nullable=true)
     */
    private $divisible;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MinimumDivisible", type="integer", nullable=true)
     */
    private $minimumdivisible;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Despecialisation", type="boolean", nullable=true)
     */
    private $despecialisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Disponibilite", type="string", length=10, nullable=true)
     */
    private $disponibilite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PrixM2", type="integer", nullable=true)
     */
    private $prixm2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dessertes", type="string", length=50, nullable=true)
     */
    private $dessertes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesDessertes", type="text", length=16777215, nullable=true)
     */
    private $notesdessertes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Construction", type="string", length=10, nullable=true)
     */
    private $construction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AnneeConstruction", type="smallint", nullable=true)
     */
    private $anneeconstruction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Architecture", type="string", length=40, nullable=true)
     */
    private $architecture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesArchitecture", type="text", length=16777215, nullable=true)
     */
    private $notesarchitecture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Energie", type="string", length=40, nullable=true)
     */
    private $energie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesEnergie", type="text", length=16777215, nullable=true)
     */
    private $notesenergie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Amenagement", type="string", length=10, nullable=true)
     */
    private $amenagement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cablage", type="string", length=30, nullable=true)
     */
    private $cablage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesBureau", type="text", length=16777215, nullable=true)
     */
    private $notesbureau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesIE", type="text", length=16777215, nullable=true)
     */
    private $notesie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Specialite", type="string", length=40, nullable=true)
     */
    private $specialite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlaces", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbplaces;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Terrasse", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $terrasse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbCouvertsMidi", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbcouvertsmidi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbCouvertsSoir", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbcouvertssoir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RecetteJour", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $recettejour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Hecto", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $hecto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbKgsCafe", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbkgscafe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesCHR", type="text", length=16777215, nullable=true)
     */
    private $noteschr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemTabac", type="integer", nullable=true)
     */
    private $remtabac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemLoto", type="integer", nullable=true)
     */
    private $remloto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemPMU", type="integer", nullable=true)
     */
    private $rempmu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemLoterie", type="integer", nullable=true)
     */
    private $remloterie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemPresse", type="integer", nullable=true)
     */
    private $rempresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemJeux", type="integer", nullable=true)
     */
    private $remjeux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RemAutres", type="integer", nullable=true)
     */
    private $remautres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CATabletterie", type="integer", nullable=true)
     */
    private $catabletterie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CACartes", type="integer", nullable=true)
     */
    private $cacartes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CATimbres", type="integer", nullable=true)
     */
    private $catimbres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAAutres", type="integer", nullable=true)
     */
    private $caautres;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MachCafeDepot", type="boolean", nullable=true)
     */
    private $machcafedepot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CategorieHotel", type="string", length=10, nullable=true)
     */
    private $categoriehotel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbChambresSimples", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbchambressimples;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BecPression", type="string", length=3, nullable=true, options={"default"="Non","fixed"=true})
     */
    private $becpression = 'Non';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbChambresDoubles", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbchambresdoubles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TauxRemplissage", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $tauxremplissage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlacesSA", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbplacessa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlacesSPdJ", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbplacesspdj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlacesPk", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbplacespk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbSallesReunion", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbsallesreunion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CapaciteSalleReunion", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $capacitesallereunion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Discotheque", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $discotheque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Casino", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $casino;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SalleMassage", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $sallemassage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SalleGymnastique", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $sallegymnastique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Piscine", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $piscine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbTennis", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbtennis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Golf", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $golf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesHotel", type="text", length=16777215, nullable=true)
     */
    private $noteshotel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CABoulangerie", type="integer", nullable=true)
     */
    private $caboulangerie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAPatisserie", type="integer", nullable=true)
     */
    private $capatisserie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CATraiteur", type="integer", nullable=true)
     */
    private $catraiteur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CASandwicherie", type="integer", nullable=true)
     */
    private $casandwicherie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAConfiserie", type="integer", nullable=true)
     */
    private $caconfiserie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAGlacier", type="integer", nullable=true)
     */
    private $caglacier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAChocolatier", type="integer", nullable=true)
     */
    private $cachocolatier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesBPCT", type="text", length=16777215, nullable=true)
     */
    private $notesbpct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MontantStock", type="integer", nullable=true)
     */
    private $montantstock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesAC", type="text", length=16777215, nullable=true)
     */
    private $notesac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesNego", type="text", length=16777215, nullable=true)
     */
    private $notesnego;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VisitCounter", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $visitcounter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbBungalows", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $nbbungalows;

    /**
     * @var bool
     *
     * @ORM\Column(name="bNaxos", type="boolean", nullable=false)
     */
    private $bnaxos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TenuDepuis", type="string", length=10, nullable=true)
     */
    private $tenudepuis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbEtage", type="integer", nullable=true)
     */
    private $nbetage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SurfaceSol", type="integer", nullable=true)
     */
    private $surfacesol;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbChambres", type="integer", nullable=true)
     */
    private $nbchambres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlacesAssises", type="integer", nullable=true)
     */
    private $nbplacesassises;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlacesTerrasse", type="integer", nullable=true)
     */
    private $nbplacesterrasse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPlacesBar", type="integer", nullable=true)
     */
    private $nbplacesbar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TypeEmplacement", type="string", length=50, nullable=true)
     */
    private $typeemplacement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Climatisation", type="boolean", nullable=true)
     */
    private $climatisation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ChargeSol", type="integer", nullable=true)
     */
    private $chargesol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HauteurSousPoutres", type="string", length=10, nullable=true)
     */
    private $hauteursouspoutres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbPorteQuai", type="integer", nullable=true)
     */
    private $nbportequai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateLiberation", type="string", length=10, nullable=true)
     */
    private $dateliberation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TaxeFonciere", type="integer", nullable=true)
     */
    private $taxefonciere;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TaxeBureau", type="integer", nullable=true)
     */
    private $taxebureau;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QuintauxFarine", type="integer", nullable=true)
     */
    private $quintauxfarine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ChargesLocativesMois", type="string", length=50, nullable=true)
     */
    private $chargeslocativesmois;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CommTotales", type="integer", nullable=true)
     */
    private $commtotales;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTRestaurant", type="integer", nullable=true)
     */
    private $cahtrestaurant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTBar", type="integer", nullable=true)
     */
    private $cahtbar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTHotellerie", type="integer", nullable=true)
     */
    private $cahthotellerie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTRestauration", type="integer", nullable=true)
     */
    private $cahtrestauration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTDivers", type="integer", nullable=true)
     */
    private $cahtdivers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTAEmporter", type="integer", nullable=true)
     */
    private $cahtaemporter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTCoiffure", type="integer", nullable=true)
     */
    private $cahtcoiffure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CAHTEsthetique", type="integer", nullable=true)
     */
    private $cahtesthetique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PERF", type="integer", nullable=true)
     */
    private $perf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LettreDPE", type="string", length=10, nullable=true)
     */
    private $lettredpe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ValeurDPE", type="integer", nullable=true)
     */
    private $valeurdpe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateDPE", type="string", length=10, nullable=true)
     */
    private $datedpe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LettreGES", type="string", length=10, nullable=true)
     */
    private $lettreges;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ValeurGES", type="integer", nullable=true)
     */
    private $valeurges;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateGES", type="string", length=10, nullable=true)
     */
    private $dateges;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NonSoumisDPE", type="boolean", nullable=true)
     */
    private $nonsoumisdpe;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DPEenCours", type="boolean", nullable=true)
     */
    private $dpeencours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NouvelleEnseigne", type="string", length=20, nullable=true)
     */
    private $nouvelleenseigne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PhotoTransaction", type="string", length=80, nullable=true)
     */
    private $phototransaction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoteNouvelleEnseigne", type="text", length=16777215, nullable=true)
     */
    private $notenouvelleenseigne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TypeMandat", type="string", length=20, nullable=true)
     */
    private $typemandat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumeroMandat", type="string", length=20, nullable=true)
     */
    private $numeromandat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateDebutMandat", type="string", length=10, nullable=true)
     */
    private $datedebutmandat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DateFinMandat", type="string", length=10, nullable=true)
     */
    private $datefinmandat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SiretRCS", type="string", length=20, nullable=true)
     */
    private $siretrcs;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Alur_CommissionChargeAcquereur", type="boolean", nullable=true)
     */
    private $alurCommissionchargeacquereur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Alur_honoraires_locataire_VDB", type="float", precision=10, scale=0, nullable=true)
     */
    private $alurHonorairesLocataireVdb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Alur_honoraires_locataire_EDL", type="float", precision=10, scale=0, nullable=true)
     */
    private $alurHonorairesLocataireEdl;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Alur_honoraires_acquereur_pourcent", type="float", precision=10, scale=0, nullable=true)
     */
    private $alurHonorairesAcquereurPourcent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Alur_copropriete", type="boolean", nullable=true)
     */
    private $alurCopropriete;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Alur_nb_lots", type="integer", nullable=true)
     */
    private $alurNbLots;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Alur_budget_previsionnel", type="float", precision=10, scale=0, nullable=true)
     */
    private $alurBudgetPrevisionnel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Alur_procedure_1", type="boolean", nullable=true)
     */
    private $alurProcedure1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Alur_procedure_2", type="boolean", nullable=true)
     */
    private $alurProcedure2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Alur_procedure_3", type="boolean", nullable=true)
     */
    private $alurProcedure3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PictFilename1", type="string", length=35, nullable=true)
     */
    private $pictfilename1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PictFilename2", type="string", length=35, nullable=true)
     */
    private $pictfilename2;

    /**
     * @var string
     *
     * @ORM\Column(name="PictFilename3", type="string", length=35, nullable=false)
     */
    private $pictfilename3;

    /**
     * @var string
     *
     * @ORM\Column(name="PictFilename4", type="string", length=35, nullable=false)
     */
    private $pictfilename4;

    /**
     * @var string
     *
     * @ORM\Column(name="PictFilename5", type="string", length=35, nullable=false)
     */
    private $pictfilename5;

    /**
     * @var string
     *
     * @ORM\Column(name="PictFilename6", type="string", length=35, nullable=false)
     */
    private $pictfilename6;

    /**
     * @var string
     *
     * @ORM\Column(name="PlanFilename", type="string", length=35, nullable=false)
     */
    private $planfilename;

    /**
     * @var string
     *
     * @ORM\Column(name="PlanFilename2", type="string", length=35, nullable=false)
     */
    private $planfilename2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VillePub", type="string", length=35, nullable=true)
     */
    private $villepub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodeDptPub", type="string", length=5, nullable=true)
     */
    private $codedptpub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomDptPub", type="string", length=35, nullable=true)
     */
    private $nomdptpub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodePostalPub", type="string", length=5, nullable=true)
     */
    private $codepostalpub;


}
