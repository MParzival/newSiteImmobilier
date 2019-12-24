<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goods
 *
 * @ORM\Table(name="goods", indexes={@ORM\Index(name="TypeBien", columns={"TypeBien"}), @ORM\Index(name="CodePostal", columns={"CodePostal"}), @ORM\Index(name="LoyerAnnuel", columns={"LoyerAnnuel"}), @ORM\Index(name="Categorie", columns={"Categorie"}), @ORM\Index(name="VisitCounter", columns={"VisitCounter"}), @ORM\Index(name="TypeTransact", columns={"TypeTransact"}), @ORM\Index(name="bNaxos", columns={"bNaxos"}), @ORM\Index(name="Activite", columns={"Activite"}), @ORM\Index(name="PrixPublic", columns={"PrixPublic"}), @ORM\Index(name="SurfaceTotale", columns={"SurfaceTotale"}), @ORM\Index(name="NbPiecesLogement", columns={"NbPiecesLogement"}), @ORM\Index(name="Top", columns={"Top"}), @ORM\Index(name="Statut", columns={"Statut"})})
 * @ORM\Entity(repositoryClass="App\Repository\GoodsRepository")
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

    /**
     * @return int
     */
    public function getIdGoods(): int
    {
        return $this->idGoods;
    }

    /**
     * @param int $idGoods
     * @return Goods
     */
    public function setIdGoods(int $idGoods): Goods
    {
        $this->idGoods = $idGoods;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodereseau(): ?int
    {
        return $this->codereseau;
    }

    /**
     * @param int|null $codereseau
     * @return Goods
     */
    public function setCodereseau(?int $codereseau): Goods
    {
        $this->codereseau = $codereseau;
        return $this;
    }

    /**
     * @return int
     */
    public function getCodeagence(): int
    {
        return $this->codeagence;
    }

    /**
     * @param int $codeagence
     * @return Goods
     */
    public function setCodeagence(int $codeagence): Goods
    {
        $this->codeagence = $codeagence;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return Goods
     */
    public function setNumero(int $numero): Goods
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateentree(): ?string
    {
        return $this->dateentree;
    }

    /**
     * @param string|null $dateentree
     * @return Goods
     */
    public function setDateentree(?string $dateentree): Goods
    {
        $this->dateentree = $dateentree;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateupdate(): ?string
    {
        return $this->dateupdate;
    }

    /**
     * @param string|null $dateupdate
     * @return Goods
     */
    public function setDateupdate(?string $dateupdate): Goods
    {
        $this->dateupdate = $dateupdate;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    /**
     * @param bool|null $statut
     * @return Goods
     */
    public function setStatut(?bool $statut): Goods
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateretrait(): ?string
    {
        return $this->dateretrait;
    }

    /**
     * @param string|null $dateretrait
     * @return Goods
     */
    public function setDateretrait(?string $dateretrait): Goods
    {
        $this->dateretrait = $dateretrait;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitreannonce(): ?string
    {
        return $this->titreannonce;
    }

    /**
     * @param string|null $titreannonce
     * @return Goods
     */
    public function setTitreannonce(?string $titreannonce): Goods
    {
        $this->titreannonce = $titreannonce;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnnonce(): ?string
    {
        return $this->annonce;
    }

    /**
     * @param string|null $annonce
     * @return Goods
     */
    public function setAnnonce(?string $annonce): Goods
    {
        $this->annonce = $annonce;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTop(): ?bool
    {
        return $this->top;
    }

    /**
     * @param bool|null $top
     * @return Goods
     */
    public function setTop(?bool $top): Goods
    {
        $this->top = $top;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypetransact(): int
    {
        return $this->typetransact;
    }

    /**
     * @param int $typetransact
     * @return Goods
     */
    public function setTypetransact(int $typetransact): Goods
    {
        $this->typetransact = $typetransact;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTypebien(): ?int
    {
        return $this->typebien;
    }

    /**
     * @param int|null $typebien
     * @return Goods
     */
    public function setTypebien(?int $typebien): Goods
    {
        $this->typebien = $typebien;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeromurs(): ?int
    {
        return $this->numeromurs;
    }

    /**
     * @param int|null $numeromurs
     * @return Goods
     */
    public function setNumeromurs(?int $numeromurs): Goods
    {
        $this->numeromurs = $numeromurs;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNegociateur(): ?string
    {
        return $this->negociateur;
    }

    /**
     * @param string|null $negociateur
     * @return Goods
     */
    public function setNegociateur(?string $negociateur): Goods
    {
        $this->negociateur = $negociateur;
        return $this;
    }

    /**
     * @return string
     */
    public function getDenomination(): string
    {
        return $this->denomination;
    }

    /**
     * @param string $denomination
     * @return Goods
     */
    public function setDenomination(string $denomination): Goods
    {
        $this->denomination = $denomination;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumvoie(): ?string
    {
        return $this->numvoie;
    }

    /**
     * @param string|null $numvoie
     * @return Goods
     */
    public function setNumvoie(?string $numvoie): Goods
    {
        $this->numvoie = $numvoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypevoie(): ?string
    {
        return $this->typevoie;
    }

    /**
     * @param string|null $typevoie
     * @return Goods
     */
    public function setTypevoie(?string $typevoie): Goods
    {
        $this->typevoie = $typevoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomvoie(): ?string
    {
        return $this->nomvoie;
    }

    /**
     * @param string|null $nomvoie
     * @return Goods
     */
    public function setNomvoie(?string $nomvoie): Goods
    {
        $this->nomvoie = $nomvoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSuiteadresse(): ?string
    {
        return $this->suiteadresse;
    }

    /**
     * @param string|null $suiteadresse
     * @return Goods
     */
    public function setSuiteadresse(?string $suiteadresse): Goods
    {
        $this->suiteadresse = $suiteadresse;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    /**
     * @param string|null $codepostal
     * @return Goods
     */
    public function setCodepostal(?string $codepostal): Goods
    {
        $this->codepostal = $codepostal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * @param string|null $ville
     * @return Goods
     */
    public function setVille(?string $ville): Goods
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     * @return Goods
     */
    public function setTelephone(?string $telephone): Goods
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param string|null $fax
     * @return Goods
     */
    public function setFax(?string $fax): Goods
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Goods
     */
    public function setEmail(?string $email): Goods
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUidvendeur(): ?string
    {
        return $this->uidvendeur;
    }

    /**
     * @param string|null $uidvendeur
     * @return Goods
     */
    public function setUidvendeur(?string $uidvendeur): Goods
    {
        $this->uidvendeur = $uidvendeur;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUidadministrateur(): ?string
    {
        return $this->uidadministrateur;
    }

    /**
     * @param string|null $uidadministrateur
     * @return Goods
     */
    public function setUidadministrateur(?string $uidadministrateur): Goods
    {
        $this->uidadministrateur = $uidadministrateur;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUidmandataire(): ?string
    {
        return $this->uidmandataire;
    }

    /**
     * @param string|null $uidmandataire
     * @return Goods
     */
    public function setUidmandataire(?string $uidmandataire): Goods
    {
        $this->uidmandataire = $uidmandataire;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivite(): string
    {
        return $this->activite;
    }

    /**
     * @param string $activite
     * @return Goods
     */
    public function setActivite(string $activite): Goods
    {
        $this->activite = $activite;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrixpublic(): ?int
    {
        return $this->prixpublic;
    }

    /**
     * @param int|null $prixpublic
     * @return Goods
     */
    public function setPrixpublic(?int $prixpublic): Goods
    {
        $this->prixpublic = $prixpublic;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLicence(): ?bool
    {
        return $this->licence;
    }

    /**
     * @param bool|null $licence
     * @return Goods
     */
    public function setLicence(?bool $licence): Goods
    {
        $this->licence = $licence;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     * @return Goods
     */
    public function setCategorie(string $categorie): Goods
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDroitaubail(): ?int
    {
        return $this->droitaubail;
    }

    /**
     * @param int|null $droitaubail
     * @return Goods
     */
    public function setDroitaubail(?int $droitaubail): Goods
    {
        $this->droitaubail = $droitaubail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypebail(): ?string
    {
        return $this->typebail;
    }

    /**
     * @param string|null $typebail
     * @return Goods
     */
    public function setTypebail(?string $typebail): Goods
    {
        $this->typebail = $typebail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDatefinbail(): ?string
    {
        return $this->datefinbail;
    }

    /**
     * @param string|null $datefinbail
     * @return Goods
     */
    public function setDatefinbail(?string $datefinbail): Goods
    {
        $this->datefinbail = $datefinbail;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLoyerannuel(): ?int
    {
        return $this->loyerannuel;
    }

    /**
     * @param int|null $loyerannuel
     * @return Goods
     */
    public function setLoyerannuel(?int $loyerannuel): Goods
    {
        $this->loyerannuel = $loyerannuel;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbpieceslogement(): ?int
    {
        return $this->nbpieceslogement;
    }

    /**
     * @param int|null $nbpieceslogement
     * @return Goods
     */
    public function setNbpieceslogement(?int $nbpieceslogement): Goods
    {
        $this->nbpieceslogement = $nbpieceslogement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescriptiflogement(): ?string
    {
        return $this->descriptiflogement;
    }

    /**
     * @param string|null $descriptiflogement
     * @return Goods
     */
    public function setDescriptiflogement(?string $descriptiflogement): Goods
    {
        $this->descriptiflogement = $descriptiflogement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuartier(): ?string
    {
        return $this->quartier;
    }

    /**
     * @param string|null $quartier
     * @return Goods
     */
    public function setQuartier(?string $quartier): Goods
    {
        $this->quartier = $quartier;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFermeturehebdo(): ?string
    {
        return $this->fermeturehebdo;
    }

    /**
     * @param string|null $fermeturehebdo
     * @return Goods
     */
    public function setFermeturehebdo(?string $fermeturehebdo): Goods
    {
        $this->fermeturehebdo = $fermeturehebdo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    /**
     * @param string|null $horaires
     * @return Goods
     */
    public function setHoraires(?string $horaires): Goods
    {
        $this->horaires = $horaires;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCongesannuel(): ?string
    {
        return $this->congesannuel;
    }

    /**
     * @param string|null $congesannuel
     * @return Goods
     */
    public function setCongesannuel(?string $congesannuel): Goods
    {
        $this->congesannuel = $congesannuel;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbemployes(): ?int
    {
        return $this->nbemployes;
    }

    /**
     * @param int|null $nbemployes
     * @return Goods
     */
    public function setNbemployes(?int $nbemployes): Goods
    {
        $this->nbemployes = $nbemployes;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbsaisonniers(): ?int
    {
        return $this->nbsaisonniers;
    }

    /**
     * @param int|null $nbsaisonniers
     * @return Goods
     */
    public function setNbsaisonniers(?int $nbsaisonniers): Goods
    {
        $this->nbsaisonniers = $nbsaisonniers;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSurfacetotale(): ?int
    {
        return $this->surfacetotale;
    }

    /**
     * @param int|null $surfacetotale
     * @return Goods
     */
    public function setSurfacetotale(?int $surfacetotale): Goods
    {
        $this->surfacetotale = $surfacetotale;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDetailsurfaces(): ?string
    {
        return $this->detailsurfaces;
    }

    /**
     * @param string|null $detailsurfaces
     * @return Goods
     */
    public function setDetailsurfaces(?string $detailsurfaces): Goods
    {
        $this->detailsurfaces = $detailsurfaces;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getBienangle(): ?bool
    {
        return $this->bienangle;
    }

    /**
     * @param bool|null $bienangle
     * @return Goods
     */
    public function setBienangle(?bool $bienangle): Goods
    {
        $this->bienangle = $bienangle;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLineairefacade(): ?int
    {
        return $this->lineairefacade;
    }

    /**
     * @param int|null $lineairefacade
     * @return Goods
     */
    public function setLineairefacade(?int $lineairefacade): Goods
    {
        $this->lineairefacade = $lineairefacade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEtatlieux(): ?string
    {
        return $this->etatlieux;
    }

    /**
     * @param string|null $etatlieux
     * @return Goods
     */
    public function setEtatlieux(?string $etatlieux): Goods
    {
        $this->etatlieux = $etatlieux;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEtatmateriel(): ?string
    {
        return $this->etatmateriel;
    }

    /**
     * @param string|null $etatmateriel
     * @return Goods
     */
    public function setEtatmateriel(?string $etatmateriel): Goods
    {
        $this->etatmateriel = $etatmateriel;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaht(): ?int
    {
        return $this->caht;
    }

    /**
     * @param int|null $caht
     * @return Goods
     */
    public function setCaht(?int $caht): Goods
    {
        $this->caht = $caht;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAchatht(): ?int
    {
        return $this->achatht;
    }

    /**
     * @param int|null $achatht
     * @return Goods
     */
    public function setAchatht(?int $achatht): Goods
    {
        $this->achatht = $achatht;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getChargesexternes(): ?int
    {
        return $this->chargesexternes;
    }

    /**
     * @param int|null $chargesexternes
     * @return Goods
     */
    public function setChargesexternes(?int $chargesexternes): Goods
    {
        $this->chargesexternes = $chargesexternes;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSalaires(): ?int
    {
        return $this->salaires;
    }

    /**
     * @param int|null $salaires
     * @return Goods
     */
    public function setSalaires(?int $salaires): Goods
    {
        $this->salaires = $salaires;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getChargessociales(): ?int
    {
        return $this->chargessociales;
    }

    /**
     * @param int|null $chargessociales
     * @return Goods
     */
    public function setChargessociales(?int $chargessociales): Goods
    {
        $this->chargessociales = $chargessociales;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRbe(): ?int
    {
        return $this->rbe;
    }

    /**
     * @param int|null $rbe
     * @return Goods
     */
    public function setRbe(?int $rbe): Goods
    {
        $this->rbe = $rbe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUidcomptable(): ?string
    {
        return $this->uidcomptable;
    }

    /**
     * @param string|null $uidcomptable
     * @return Goods
     */
    public function setUidcomptable(?string $uidcomptable): Goods
    {
        $this->uidcomptable = $uidcomptable;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDroitentree(): ?int
    {
        return $this->droitentree;
    }

    /**
     * @param int|null $droitentree
     * @return Goods
     */
    public function setDroitentree(?int $droitentree): Goods
    {
        $this->droitentree = $droitentree;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLoyerpossible(): ?int
    {
        return $this->loyerpossible;
    }

    /**
     * @param int|null $loyerpossible
     * @return Goods
     */
    public function setLoyerpossible(?int $loyerpossible): Goods
    {
        $this->loyerpossible = $loyerpossible;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDivisible(): ?bool
    {
        return $this->divisible;
    }

    /**
     * @param bool|null $divisible
     * @return Goods
     */
    public function setDivisible(?bool $divisible): Goods
    {
        $this->divisible = $divisible;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinimumdivisible(): ?int
    {
        return $this->minimumdivisible;
    }

    /**
     * @param int|null $minimumdivisible
     * @return Goods
     */
    public function setMinimumdivisible(?int $minimumdivisible): Goods
    {
        $this->minimumdivisible = $minimumdivisible;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDespecialisation(): ?bool
    {
        return $this->despecialisation;
    }

    /**
     * @param bool|null $despecialisation
     * @return Goods
     */
    public function setDespecialisation(?bool $despecialisation): Goods
    {
        $this->despecialisation = $despecialisation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    /**
     * @param string|null $disponibilite
     * @return Goods
     */
    public function setDisponibilite(?string $disponibilite): Goods
    {
        $this->disponibilite = $disponibilite;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrixm2(): ?int
    {
        return $this->prixm2;
    }

    /**
     * @param int|null $prixm2
     * @return Goods
     */
    public function setPrixm2(?int $prixm2): Goods
    {
        $this->prixm2 = $prixm2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDessertes(): ?string
    {
        return $this->dessertes;
    }

    /**
     * @param string|null $dessertes
     * @return Goods
     */
    public function setDessertes(?string $dessertes): Goods
    {
        $this->dessertes = $dessertes;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesdessertes(): ?string
    {
        return $this->notesdessertes;
    }

    /**
     * @param string|null $notesdessertes
     * @return Goods
     */
    public function setNotesdessertes(?string $notesdessertes): Goods
    {
        $this->notesdessertes = $notesdessertes;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConstruction(): ?string
    {
        return $this->construction;
    }

    /**
     * @param string|null $construction
     * @return Goods
     */
    public function setConstruction(?string $construction): Goods
    {
        $this->construction = $construction;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAnneeconstruction(): ?int
    {
        return $this->anneeconstruction;
    }

    /**
     * @param int|null $anneeconstruction
     * @return Goods
     */
    public function setAnneeconstruction(?int $anneeconstruction): Goods
    {
        $this->anneeconstruction = $anneeconstruction;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }

    /**
     * @param string|null $architecture
     * @return Goods
     */
    public function setArchitecture(?string $architecture): Goods
    {
        $this->architecture = $architecture;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesarchitecture(): ?string
    {
        return $this->notesarchitecture;
    }

    /**
     * @param string|null $notesarchitecture
     * @return Goods
     */
    public function setNotesarchitecture(?string $notesarchitecture): Goods
    {
        $this->notesarchitecture = $notesarchitecture;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnergie(): ?string
    {
        return $this->energie;
    }

    /**
     * @param string|null $energie
     * @return Goods
     */
    public function setEnergie(?string $energie): Goods
    {
        $this->energie = $energie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesenergie(): ?string
    {
        return $this->notesenergie;
    }

    /**
     * @param string|null $notesenergie
     * @return Goods
     */
    public function setNotesenergie(?string $notesenergie): Goods
    {
        $this->notesenergie = $notesenergie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmenagement(): ?string
    {
        return $this->amenagement;
    }

    /**
     * @param string|null $amenagement
     * @return Goods
     */
    public function setAmenagement(?string $amenagement): Goods
    {
        $this->amenagement = $amenagement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCablage(): ?string
    {
        return $this->cablage;
    }

    /**
     * @param string|null $cablage
     * @return Goods
     */
    public function setCablage(?string $cablage): Goods
    {
        $this->cablage = $cablage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesbureau(): ?string
    {
        return $this->notesbureau;
    }

    /**
     * @param string|null $notesbureau
     * @return Goods
     */
    public function setNotesbureau(?string $notesbureau): Goods
    {
        $this->notesbureau = $notesbureau;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesie(): ?string
    {
        return $this->notesie;
    }

    /**
     * @param string|null $notesie
     * @return Goods
     */
    public function setNotesie(?string $notesie): Goods
    {
        $this->notesie = $notesie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    /**
     * @param string|null $specialite
     * @return Goods
     */
    public function setSpecialite(?string $specialite): Goods
    {
        $this->specialite = $specialite;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplaces(): ?int
    {
        return $this->nbplaces;
    }

    /**
     * @param int|null $nbplaces
     * @return Goods
     */
    public function setNbplaces(?int $nbplaces): Goods
    {
        $this->nbplaces = $nbplaces;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTerrasse(): ?int
    {
        return $this->terrasse;
    }

    /**
     * @param int|null $terrasse
     * @return Goods
     */
    public function setTerrasse(?int $terrasse): Goods
    {
        $this->terrasse = $terrasse;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbcouvertsmidi(): ?int
    {
        return $this->nbcouvertsmidi;
    }

    /**
     * @param int|null $nbcouvertsmidi
     * @return Goods
     */
    public function setNbcouvertsmidi(?int $nbcouvertsmidi): Goods
    {
        $this->nbcouvertsmidi = $nbcouvertsmidi;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbcouvertssoir(): ?int
    {
        return $this->nbcouvertssoir;
    }

    /**
     * @param int|null $nbcouvertssoir
     * @return Goods
     */
    public function setNbcouvertssoir(?int $nbcouvertssoir): Goods
    {
        $this->nbcouvertssoir = $nbcouvertssoir;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecettejour(): ?int
    {
        return $this->recettejour;
    }

    /**
     * @param int|null $recettejour
     * @return Goods
     */
    public function setRecettejour(?int $recettejour): Goods
    {
        $this->recettejour = $recettejour;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHecto(): ?int
    {
        return $this->hecto;
    }

    /**
     * @param int|null $hecto
     * @return Goods
     */
    public function setHecto(?int $hecto): Goods
    {
        $this->hecto = $hecto;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbkgscafe(): ?int
    {
        return $this->nbkgscafe;
    }

    /**
     * @param int|null $nbkgscafe
     * @return Goods
     */
    public function setNbkgscafe(?int $nbkgscafe): Goods
    {
        $this->nbkgscafe = $nbkgscafe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoteschr(): ?string
    {
        return $this->noteschr;
    }

    /**
     * @param string|null $noteschr
     * @return Goods
     */
    public function setNoteschr(?string $noteschr): Goods
    {
        $this->noteschr = $noteschr;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemtabac(): ?int
    {
        return $this->remtabac;
    }

    /**
     * @param int|null $remtabac
     * @return Goods
     */
    public function setRemtabac(?int $remtabac): Goods
    {
        $this->remtabac = $remtabac;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemloto(): ?int
    {
        return $this->remloto;
    }

    /**
     * @param int|null $remloto
     * @return Goods
     */
    public function setRemloto(?int $remloto): Goods
    {
        $this->remloto = $remloto;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRempmu(): ?int
    {
        return $this->rempmu;
    }

    /**
     * @param int|null $rempmu
     * @return Goods
     */
    public function setRempmu(?int $rempmu): Goods
    {
        $this->rempmu = $rempmu;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemloterie(): ?int
    {
        return $this->remloterie;
    }

    /**
     * @param int|null $remloterie
     * @return Goods
     */
    public function setRemloterie(?int $remloterie): Goods
    {
        $this->remloterie = $remloterie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRempresse(): ?int
    {
        return $this->rempresse;
    }

    /**
     * @param int|null $rempresse
     * @return Goods
     */
    public function setRempresse(?int $rempresse): Goods
    {
        $this->rempresse = $rempresse;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemjeux(): ?int
    {
        return $this->remjeux;
    }

    /**
     * @param int|null $remjeux
     * @return Goods
     */
    public function setRemjeux(?int $remjeux): Goods
    {
        $this->remjeux = $remjeux;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemautres(): ?int
    {
        return $this->remautres;
    }

    /**
     * @param int|null $remautres
     * @return Goods
     */
    public function setRemautres(?int $remautres): Goods
    {
        $this->remautres = $remautres;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCatabletterie(): ?int
    {
        return $this->catabletterie;
    }

    /**
     * @param int|null $catabletterie
     * @return Goods
     */
    public function setCatabletterie(?int $catabletterie): Goods
    {
        $this->catabletterie = $catabletterie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCacartes(): ?int
    {
        return $this->cacartes;
    }

    /**
     * @param int|null $cacartes
     * @return Goods
     */
    public function setCacartes(?int $cacartes): Goods
    {
        $this->cacartes = $cacartes;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCatimbres(): ?int
    {
        return $this->catimbres;
    }

    /**
     * @param int|null $catimbres
     * @return Goods
     */
    public function setCatimbres(?int $catimbres): Goods
    {
        $this->catimbres = $catimbres;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaautres(): ?int
    {
        return $this->caautres;
    }

    /**
     * @param int|null $caautres
     * @return Goods
     */
    public function setCaautres(?int $caautres): Goods
    {
        $this->caautres = $caautres;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMachcafedepot(): ?bool
    {
        return $this->machcafedepot;
    }

    /**
     * @param bool|null $machcafedepot
     * @return Goods
     */
    public function setMachcafedepot(?bool $machcafedepot): Goods
    {
        $this->machcafedepot = $machcafedepot;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategoriehotel(): ?string
    {
        return $this->categoriehotel;
    }

    /**
     * @param string|null $categoriehotel
     * @return Goods
     */
    public function setCategoriehotel(?string $categoriehotel): Goods
    {
        $this->categoriehotel = $categoriehotel;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbchambressimples(): ?int
    {
        return $this->nbchambressimples;
    }

    /**
     * @param int|null $nbchambressimples
     * @return Goods
     */
    public function setNbchambressimples(?int $nbchambressimples): Goods
    {
        $this->nbchambressimples = $nbchambressimples;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBecpression(): ?string
    {
        return $this->becpression;
    }

    /**
     * @param string|null $becpression
     * @return Goods
     */
    public function setBecpression(?string $becpression): Goods
    {
        $this->becpression = $becpression;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbchambresdoubles(): ?int
    {
        return $this->nbchambresdoubles;
    }

    /**
     * @param int|null $nbchambresdoubles
     * @return Goods
     */
    public function setNbchambresdoubles(?int $nbchambresdoubles): Goods
    {
        $this->nbchambresdoubles = $nbchambresdoubles;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTauxremplissage(): ?int
    {
        return $this->tauxremplissage;
    }

    /**
     * @param int|null $tauxremplissage
     * @return Goods
     */
    public function setTauxremplissage(?int $tauxremplissage): Goods
    {
        $this->tauxremplissage = $tauxremplissage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplacessa(): ?int
    {
        return $this->nbplacessa;
    }

    /**
     * @param int|null $nbplacessa
     * @return Goods
     */
    public function setNbplacessa(?int $nbplacessa): Goods
    {
        $this->nbplacessa = $nbplacessa;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplacesspdj(): ?int
    {
        return $this->nbplacesspdj;
    }

    /**
     * @param int|null $nbplacesspdj
     * @return Goods
     */
    public function setNbplacesspdj(?int $nbplacesspdj): Goods
    {
        $this->nbplacesspdj = $nbplacesspdj;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplacespk(): ?int
    {
        return $this->nbplacespk;
    }

    /**
     * @param int|null $nbplacespk
     * @return Goods
     */
    public function setNbplacespk(?int $nbplacespk): Goods
    {
        $this->nbplacespk = $nbplacespk;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbsallesreunion(): ?int
    {
        return $this->nbsallesreunion;
    }

    /**
     * @param int|null $nbsallesreunion
     * @return Goods
     */
    public function setNbsallesreunion(?int $nbsallesreunion): Goods
    {
        $this->nbsallesreunion = $nbsallesreunion;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapacitesallereunion(): ?int
    {
        return $this->capacitesallereunion;
    }

    /**
     * @param int|null $capacitesallereunion
     * @return Goods
     */
    public function setCapacitesallereunion(?int $capacitesallereunion): Goods
    {
        $this->capacitesallereunion = $capacitesallereunion;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDiscotheque(): ?int
    {
        return $this->discotheque;
    }

    /**
     * @param int|null $discotheque
     * @return Goods
     */
    public function setDiscotheque(?int $discotheque): Goods
    {
        $this->discotheque = $discotheque;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCasino(): ?int
    {
        return $this->casino;
    }

    /**
     * @param int|null $casino
     * @return Goods
     */
    public function setCasino(?int $casino): Goods
    {
        $this->casino = $casino;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSallemassage(): ?int
    {
        return $this->sallemassage;
    }

    /**
     * @param int|null $sallemassage
     * @return Goods
     */
    public function setSallemassage(?int $sallemassage): Goods
    {
        $this->sallemassage = $sallemassage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSallegymnastique(): ?int
    {
        return $this->sallegymnastique;
    }

    /**
     * @param int|null $sallegymnastique
     * @return Goods
     */
    public function setSallegymnastique(?int $sallegymnastique): Goods
    {
        $this->sallegymnastique = $sallegymnastique;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPiscine(): ?int
    {
        return $this->piscine;
    }

    /**
     * @param int|null $piscine
     * @return Goods
     */
    public function setPiscine(?int $piscine): Goods
    {
        $this->piscine = $piscine;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbtennis(): ?int
    {
        return $this->nbtennis;
    }

    /**
     * @param int|null $nbtennis
     * @return Goods
     */
    public function setNbtennis(?int $nbtennis): Goods
    {
        $this->nbtennis = $nbtennis;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGolf(): ?int
    {
        return $this->golf;
    }

    /**
     * @param int|null $golf
     * @return Goods
     */
    public function setGolf(?int $golf): Goods
    {
        $this->golf = $golf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoteshotel(): ?string
    {
        return $this->noteshotel;
    }

    /**
     * @param string|null $noteshotel
     * @return Goods
     */
    public function setNoteshotel(?string $noteshotel): Goods
    {
        $this->noteshotel = $noteshotel;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaboulangerie(): ?int
    {
        return $this->caboulangerie;
    }

    /**
     * @param int|null $caboulangerie
     * @return Goods
     */
    public function setCaboulangerie(?int $caboulangerie): Goods
    {
        $this->caboulangerie = $caboulangerie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapatisserie(): ?int
    {
        return $this->capatisserie;
    }

    /**
     * @param int|null $capatisserie
     * @return Goods
     */
    public function setCapatisserie(?int $capatisserie): Goods
    {
        $this->capatisserie = $capatisserie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCatraiteur(): ?int
    {
        return $this->catraiteur;
    }

    /**
     * @param int|null $catraiteur
     * @return Goods
     */
    public function setCatraiteur(?int $catraiteur): Goods
    {
        $this->catraiteur = $catraiteur;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCasandwicherie(): ?int
    {
        return $this->casandwicherie;
    }

    /**
     * @param int|null $casandwicherie
     * @return Goods
     */
    public function setCasandwicherie(?int $casandwicherie): Goods
    {
        $this->casandwicherie = $casandwicherie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaconfiserie(): ?int
    {
        return $this->caconfiserie;
    }

    /**
     * @param int|null $caconfiserie
     * @return Goods
     */
    public function setCaconfiserie(?int $caconfiserie): Goods
    {
        $this->caconfiserie = $caconfiserie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaglacier(): ?int
    {
        return $this->caglacier;
    }

    /**
     * @param int|null $caglacier
     * @return Goods
     */
    public function setCaglacier(?int $caglacier): Goods
    {
        $this->caglacier = $caglacier;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCachocolatier(): ?int
    {
        return $this->cachocolatier;
    }

    /**
     * @param int|null $cachocolatier
     * @return Goods
     */
    public function setCachocolatier(?int $cachocolatier): Goods
    {
        $this->cachocolatier = $cachocolatier;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesbpct(): ?string
    {
        return $this->notesbpct;
    }

    /**
     * @param string|null $notesbpct
     * @return Goods
     */
    public function setNotesbpct(?string $notesbpct): Goods
    {
        $this->notesbpct = $notesbpct;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMontantstock(): ?int
    {
        return $this->montantstock;
    }

    /**
     * @param int|null $montantstock
     * @return Goods
     */
    public function setMontantstock(?int $montantstock): Goods
    {
        $this->montantstock = $montantstock;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesac(): ?string
    {
        return $this->notesac;
    }

    /**
     * @param string|null $notesac
     * @return Goods
     */
    public function setNotesac(?string $notesac): Goods
    {
        $this->notesac = $notesac;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotesnego(): ?string
    {
        return $this->notesnego;
    }

    /**
     * @param string|null $notesnego
     * @return Goods
     */
    public function setNotesnego(?string $notesnego): Goods
    {
        $this->notesnego = $notesnego;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVisitcounter(): ?int
    {
        return $this->visitcounter;
    }

    /**
     * @param int|null $visitcounter
     * @return Goods
     */
    public function setVisitcounter(?int $visitcounter): Goods
    {
        $this->visitcounter = $visitcounter;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbbungalows(): ?int
    {
        return $this->nbbungalows;
    }

    /**
     * @param int|null $nbbungalows
     * @return Goods
     */
    public function setNbbungalows(?int $nbbungalows): Goods
    {
        $this->nbbungalows = $nbbungalows;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBnaxos(): bool
    {
        return $this->bnaxos;
    }

    /**
     * @param bool $bnaxos
     * @return Goods
     */
    public function setBnaxos(bool $bnaxos): Goods
    {
        $this->bnaxos = $bnaxos;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTenudepuis(): ?string
    {
        return $this->tenudepuis;
    }

    /**
     * @param string|null $tenudepuis
     * @return Goods
     */
    public function setTenudepuis(?string $tenudepuis): Goods
    {
        $this->tenudepuis = $tenudepuis;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbetage(): ?int
    {
        return $this->nbetage;
    }

    /**
     * @param int|null $nbetage
     * @return Goods
     */
    public function setNbetage(?int $nbetage): Goods
    {
        $this->nbetage = $nbetage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSurfacesol(): ?int
    {
        return $this->surfacesol;
    }

    /**
     * @param int|null $surfacesol
     * @return Goods
     */
    public function setSurfacesol(?int $surfacesol): Goods
    {
        $this->surfacesol = $surfacesol;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbchambres(): ?int
    {
        return $this->nbchambres;
    }

    /**
     * @param int|null $nbchambres
     * @return Goods
     */
    public function setNbchambres(?int $nbchambres): Goods
    {
        $this->nbchambres = $nbchambres;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplacesassises(): ?int
    {
        return $this->nbplacesassises;
    }

    /**
     * @param int|null $nbplacesassises
     * @return Goods
     */
    public function setNbplacesassises(?int $nbplacesassises): Goods
    {
        $this->nbplacesassises = $nbplacesassises;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplacesterrasse(): ?int
    {
        return $this->nbplacesterrasse;
    }

    /**
     * @param int|null $nbplacesterrasse
     * @return Goods
     */
    public function setNbplacesterrasse(?int $nbplacesterrasse): Goods
    {
        $this->nbplacesterrasse = $nbplacesterrasse;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbplacesbar(): ?int
    {
        return $this->nbplacesbar;
    }

    /**
     * @param int|null $nbplacesbar
     * @return Goods
     */
    public function setNbplacesbar(?int $nbplacesbar): Goods
    {
        $this->nbplacesbar = $nbplacesbar;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypeemplacement(): ?string
    {
        return $this->typeemplacement;
    }

    /**
     * @param string|null $typeemplacement
     * @return Goods
     */
    public function setTypeemplacement(?string $typeemplacement): Goods
    {
        $this->typeemplacement = $typeemplacement;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    /**
     * @param bool|null $climatisation
     * @return Goods
     */
    public function setClimatisation(?bool $climatisation): Goods
    {
        $this->climatisation = $climatisation;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getChargesol(): ?int
    {
        return $this->chargesol;
    }

    /**
     * @param int|null $chargesol
     * @return Goods
     */
    public function setChargesol(?int $chargesol): Goods
    {
        $this->chargesol = $chargesol;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHauteursouspoutres(): ?string
    {
        return $this->hauteursouspoutres;
    }

    /**
     * @param string|null $hauteursouspoutres
     * @return Goods
     */
    public function setHauteursouspoutres(?string $hauteursouspoutres): Goods
    {
        $this->hauteursouspoutres = $hauteursouspoutres;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbportequai(): ?int
    {
        return $this->nbportequai;
    }

    /**
     * @param int|null $nbportequai
     * @return Goods
     */
    public function setNbportequai(?int $nbportequai): Goods
    {
        $this->nbportequai = $nbportequai;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateliberation(): ?string
    {
        return $this->dateliberation;
    }

    /**
     * @param string|null $dateliberation
     * @return Goods
     */
    public function setDateliberation(?string $dateliberation): Goods
    {
        $this->dateliberation = $dateliberation;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxefonciere(): ?int
    {
        return $this->taxefonciere;
    }

    /**
     * @param int|null $taxefonciere
     * @return Goods
     */
    public function setTaxefonciere(?int $taxefonciere): Goods
    {
        $this->taxefonciere = $taxefonciere;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxebureau(): ?int
    {
        return $this->taxebureau;
    }

    /**
     * @param int|null $taxebureau
     * @return Goods
     */
    public function setTaxebureau(?int $taxebureau): Goods
    {
        $this->taxebureau = $taxebureau;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuintauxfarine(): ?int
    {
        return $this->quintauxfarine;
    }

    /**
     * @param int|null $quintauxfarine
     * @return Goods
     */
    public function setQuintauxfarine(?int $quintauxfarine): Goods
    {
        $this->quintauxfarine = $quintauxfarine;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChargeslocativesmois(): ?string
    {
        return $this->chargeslocativesmois;
    }

    /**
     * @param string|null $chargeslocativesmois
     * @return Goods
     */
    public function setChargeslocativesmois(?string $chargeslocativesmois): Goods
    {
        $this->chargeslocativesmois = $chargeslocativesmois;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCommtotales(): ?int
    {
        return $this->commtotales;
    }

    /**
     * @param int|null $commtotales
     * @return Goods
     */
    public function setCommtotales(?int $commtotales): Goods
    {
        $this->commtotales = $commtotales;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtrestaurant(): ?int
    {
        return $this->cahtrestaurant;
    }

    /**
     * @param int|null $cahtrestaurant
     * @return Goods
     */
    public function setCahtrestaurant(?int $cahtrestaurant): Goods
    {
        $this->cahtrestaurant = $cahtrestaurant;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtbar(): ?int
    {
        return $this->cahtbar;
    }

    /**
     * @param int|null $cahtbar
     * @return Goods
     */
    public function setCahtbar(?int $cahtbar): Goods
    {
        $this->cahtbar = $cahtbar;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahthotellerie(): ?int
    {
        return $this->cahthotellerie;
    }

    /**
     * @param int|null $cahthotellerie
     * @return Goods
     */
    public function setCahthotellerie(?int $cahthotellerie): Goods
    {
        $this->cahthotellerie = $cahthotellerie;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtrestauration(): ?int
    {
        return $this->cahtrestauration;
    }

    /**
     * @param int|null $cahtrestauration
     * @return Goods
     */
    public function setCahtrestauration(?int $cahtrestauration): Goods
    {
        $this->cahtrestauration = $cahtrestauration;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtdivers(): ?int
    {
        return $this->cahtdivers;
    }

    /**
     * @param int|null $cahtdivers
     * @return Goods
     */
    public function setCahtdivers(?int $cahtdivers): Goods
    {
        $this->cahtdivers = $cahtdivers;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtaemporter(): ?int
    {
        return $this->cahtaemporter;
    }

    /**
     * @param int|null $cahtaemporter
     * @return Goods
     */
    public function setCahtaemporter(?int $cahtaemporter): Goods
    {
        $this->cahtaemporter = $cahtaemporter;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtcoiffure(): ?int
    {
        return $this->cahtcoiffure;
    }

    /**
     * @param int|null $cahtcoiffure
     * @return Goods
     */
    public function setCahtcoiffure(?int $cahtcoiffure): Goods
    {
        $this->cahtcoiffure = $cahtcoiffure;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCahtesthetique(): ?int
    {
        return $this->cahtesthetique;
    }

    /**
     * @param int|null $cahtesthetique
     * @return Goods
     */
    public function setCahtesthetique(?int $cahtesthetique): Goods
    {
        $this->cahtesthetique = $cahtesthetique;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerf(): ?int
    {
        return $this->perf;
    }

    /**
     * @param int|null $perf
     * @return Goods
     */
    public function setPerf(?int $perf): Goods
    {
        $this->perf = $perf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLettredpe(): ?string
    {
        return $this->lettredpe;
    }

    /**
     * @param string|null $lettredpe
     * @return Goods
     */
    public function setLettredpe(?string $lettredpe): Goods
    {
        $this->lettredpe = $lettredpe;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getValeurdpe(): ?int
    {
        return $this->valeurdpe;
    }

    /**
     * @param int|null $valeurdpe
     * @return Goods
     */
    public function setValeurdpe(?int $valeurdpe): Goods
    {
        $this->valeurdpe = $valeurdpe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDatedpe(): ?string
    {
        return $this->datedpe;
    }

    /**
     * @param string|null $datedpe
     * @return Goods
     */
    public function setDatedpe(?string $datedpe): Goods
    {
        $this->datedpe = $datedpe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLettreges(): ?string
    {
        return $this->lettreges;
    }

    /**
     * @param string|null $lettreges
     * @return Goods
     */
    public function setLettreges(?string $lettreges): Goods
    {
        $this->lettreges = $lettreges;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getValeurges(): ?int
    {
        return $this->valeurges;
    }

    /**
     * @param int|null $valeurges
     * @return Goods
     */
    public function setValeurges(?int $valeurges): Goods
    {
        $this->valeurges = $valeurges;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateges(): ?string
    {
        return $this->dateges;
    }

    /**
     * @param string|null $dateges
     * @return Goods
     */
    public function setDateges(?string $dateges): Goods
    {
        $this->dateges = $dateges;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNonsoumisdpe(): ?bool
    {
        return $this->nonsoumisdpe;
    }

    /**
     * @param bool|null $nonsoumisdpe
     * @return Goods
     */
    public function setNonsoumisdpe(?bool $nonsoumisdpe): Goods
    {
        $this->nonsoumisdpe = $nonsoumisdpe;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDpeencours(): ?bool
    {
        return $this->dpeencours;
    }

    /**
     * @param bool|null $dpeencours
     * @return Goods
     */
    public function setDpeencours(?bool $dpeencours): Goods
    {
        $this->dpeencours = $dpeencours;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNouvelleenseigne(): ?string
    {
        return $this->nouvelleenseigne;
    }

    /**
     * @param string|null $nouvelleenseigne
     * @return Goods
     */
    public function setNouvelleenseigne(?string $nouvelleenseigne): Goods
    {
        $this->nouvelleenseigne = $nouvelleenseigne;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhototransaction(): ?string
    {
        return $this->phototransaction;
    }

    /**
     * @param string|null $phototransaction
     * @return Goods
     */
    public function setPhototransaction(?string $phototransaction): Goods
    {
        $this->phototransaction = $phototransaction;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotenouvelleenseigne(): ?string
    {
        return $this->notenouvelleenseigne;
    }

    /**
     * @param string|null $notenouvelleenseigne
     * @return Goods
     */
    public function setNotenouvelleenseigne(?string $notenouvelleenseigne): Goods
    {
        $this->notenouvelleenseigne = $notenouvelleenseigne;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTypemandat(): ?string
    {
        return $this->typemandat;
    }

    /**
     * @param string|null $typemandat
     * @return Goods
     */
    public function setTypemandat(?string $typemandat): Goods
    {
        $this->typemandat = $typemandat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeromandat(): ?string
    {
        return $this->numeromandat;
    }

    /**
     * @param string|null $numeromandat
     * @return Goods
     */
    public function setNumeromandat(?string $numeromandat): Goods
    {
        $this->numeromandat = $numeromandat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDatedebutmandat(): ?string
    {
        return $this->datedebutmandat;
    }

    /**
     * @param string|null $datedebutmandat
     * @return Goods
     */
    public function setDatedebutmandat(?string $datedebutmandat): Goods
    {
        $this->datedebutmandat = $datedebutmandat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDatefinmandat(): ?string
    {
        return $this->datefinmandat;
    }

    /**
     * @param string|null $datefinmandat
     * @return Goods
     */
    public function setDatefinmandat(?string $datefinmandat): Goods
    {
        $this->datefinmandat = $datefinmandat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSiretrcs(): ?string
    {
        return $this->siretrcs;
    }

    /**
     * @param string|null $siretrcs
     * @return Goods
     */
    public function setSiretrcs(?string $siretrcs): Goods
    {
        $this->siretrcs = $siretrcs;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlurCommissionchargeacquereur(): ?bool
    {
        return $this->alurCommissionchargeacquereur;
    }

    /**
     * @param bool|null $alurCommissionchargeacquereur
     * @return Goods
     */
    public function setAlurCommissionchargeacquereur(?bool $alurCommissionchargeacquereur): Goods
    {
        $this->alurCommissionchargeacquereur = $alurCommissionchargeacquereur;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAlurHonorairesLocataireVdb(): ?float
    {
        return $this->alurHonorairesLocataireVdb;
    }

    /**
     * @param float|null $alurHonorairesLocataireVdb
     * @return Goods
     */
    public function setAlurHonorairesLocataireVdb(?float $alurHonorairesLocataireVdb): Goods
    {
        $this->alurHonorairesLocataireVdb = $alurHonorairesLocataireVdb;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAlurHonorairesLocataireEdl(): ?float
    {
        return $this->alurHonorairesLocataireEdl;
    }

    /**
     * @param float|null $alurHonorairesLocataireEdl
     * @return Goods
     */
    public function setAlurHonorairesLocataireEdl(?float $alurHonorairesLocataireEdl): Goods
    {
        $this->alurHonorairesLocataireEdl = $alurHonorairesLocataireEdl;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAlurHonorairesAcquereurPourcent(): ?float
    {
        return $this->alurHonorairesAcquereurPourcent;
    }

    /**
     * @param float|null $alurHonorairesAcquereurPourcent
     * @return Goods
     */
    public function setAlurHonorairesAcquereurPourcent(?float $alurHonorairesAcquereurPourcent): Goods
    {
        $this->alurHonorairesAcquereurPourcent = $alurHonorairesAcquereurPourcent;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlurCopropriete(): ?bool
    {
        return $this->alurCopropriete;
    }

    /**
     * @param bool|null $alurCopropriete
     * @return Goods
     */
    public function setAlurCopropriete(?bool $alurCopropriete): Goods
    {
        $this->alurCopropriete = $alurCopropriete;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAlurNbLots(): ?int
    {
        return $this->alurNbLots;
    }

    /**
     * @param int|null $alurNbLots
     * @return Goods
     */
    public function setAlurNbLots(?int $alurNbLots): Goods
    {
        $this->alurNbLots = $alurNbLots;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAlurBudgetPrevisionnel(): ?float
    {
        return $this->alurBudgetPrevisionnel;
    }

    /**
     * @param float|null $alurBudgetPrevisionnel
     * @return Goods
     */
    public function setAlurBudgetPrevisionnel(?float $alurBudgetPrevisionnel): Goods
    {
        $this->alurBudgetPrevisionnel = $alurBudgetPrevisionnel;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlurProcedure1(): ?bool
    {
        return $this->alurProcedure1;
    }

    /**
     * @param bool|null $alurProcedure1
     * @return Goods
     */
    public function setAlurProcedure1(?bool $alurProcedure1): Goods
    {
        $this->alurProcedure1 = $alurProcedure1;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlurProcedure2(): ?bool
    {
        return $this->alurProcedure2;
    }

    /**
     * @param bool|null $alurProcedure2
     * @return Goods
     */
    public function setAlurProcedure2(?bool $alurProcedure2): Goods
    {
        $this->alurProcedure2 = $alurProcedure2;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlurProcedure3(): ?bool
    {
        return $this->alurProcedure3;
    }

    /**
     * @param bool|null $alurProcedure3
     * @return Goods
     */
    public function setAlurProcedure3(?bool $alurProcedure3): Goods
    {
        $this->alurProcedure3 = $alurProcedure3;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPictfilename1(): ?string
    {
        return $this->pictfilename1;
    }

    /**
     * @param string|null $pictfilename1
     * @return Goods
     */
    public function setPictfilename1(?string $pictfilename1): Goods
    {
        $this->pictfilename1 = $pictfilename1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPictfilename2(): ?string
    {
        return $this->pictfilename2;
    }

    /**
     * @param string|null $pictfilename2
     * @return Goods
     */
    public function setPictfilename2(?string $pictfilename2): Goods
    {
        $this->pictfilename2 = $pictfilename2;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictfilename3(): string
    {
        return $this->pictfilename3;
    }

    /**
     * @param string $pictfilename3
     * @return Goods
     */
    public function setPictfilename3(string $pictfilename3): Goods
    {
        $this->pictfilename3 = $pictfilename3;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictfilename4(): string
    {
        return $this->pictfilename4;
    }

    /**
     * @param string $pictfilename4
     * @return Goods
     */
    public function setPictfilename4(string $pictfilename4): Goods
    {
        $this->pictfilename4 = $pictfilename4;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictfilename5(): string
    {
        return $this->pictfilename5;
    }

    /**
     * @param string $pictfilename5
     * @return Goods
     */
    public function setPictfilename5(string $pictfilename5): Goods
    {
        $this->pictfilename5 = $pictfilename5;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictfilename6(): string
    {
        return $this->pictfilename6;
    }

    /**
     * @param string $pictfilename6
     * @return Goods
     */
    public function setPictfilename6(string $pictfilename6): Goods
    {
        $this->pictfilename6 = $pictfilename6;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanfilename(): string
    {
        return $this->planfilename;
    }

    /**
     * @param string $planfilename
     * @return Goods
     */
    public function setPlanfilename(string $planfilename): Goods
    {
        $this->planfilename = $planfilename;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanfilename2(): string
    {
        return $this->planfilename2;
    }

    /**
     * @param string $planfilename2
     * @return Goods
     */
    public function setPlanfilename2(string $planfilename2): Goods
    {
        $this->planfilename2 = $planfilename2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVillepub(): ?string
    {
        return $this->villepub;
    }

    /**
     * @param string|null $villepub
     * @return Goods
     */
    public function setVillepub(?string $villepub): Goods
    {
        $this->villepub = $villepub;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodedptpub(): ?string
    {
        return $this->codedptpub;
    }

    /**
     * @param string|null $codedptpub
     * @return Goods
     */
    public function setCodedptpub(?string $codedptpub): Goods
    {
        $this->codedptpub = $codedptpub;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomdptpub(): ?string
    {
        return $this->nomdptpub;
    }

    /**
     * @param string|null $nomdptpub
     * @return Goods
     */
    public function setNomdptpub(?string $nomdptpub): Goods
    {
        $this->nomdptpub = $nomdptpub;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodepostalpub(): ?string
    {
        return $this->codepostalpub;
    }

    /**
     * @param string|null $codepostalpub
     * @return Goods
     */
    public function setCodepostalpub(?string $codepostalpub): Goods
    {
        $this->codepostalpub = $codepostalpub;
        return $this;
    }


}
