<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2018-05-26 08:40:42
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'espaces',
    'nom' => 'Espaces',
    'slogan' => 'Gestion d\'espaces',
    'description' => 'Gestion d\'espaces',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'https://websimple.be',
    'licence' => 'GNU/GPL v3',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.0;3.2.*]',
    'documentation' => 'https://github.com/abelass/espaces',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Espace',
      'nom_singulier' => 'Espaces',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => 'on',
      'table' => 'spip_espaces',
      'cle_primaire' => 'id_espace',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'espace',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Descriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        2 => 
        array (
          'nom' => 'Mesure',
          'champ' => 'mesure',
          'sql' => 'int(11) NOT NULL DEFAULT 0',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Unité',
          'champ' => 'unite',
          'sql' => 'varchar(10) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Espace',
        'titre_objet' => 'Espaces',
        'info_aucun_objet' => 'Aucun espaces',
        'info_1_objet' => 'Un espaces',
        'info_nb_objets' => '@nb@ espace',
        'icone_creer_objet' => 'Créer un espaces',
        'icone_modifier_objet' => 'Modifier ce espaces',
        'titre_logo_objet' => 'Logo de ce espaces',
        'titre_langue_objet' => 'Langue de ce espaces',
        'texte_definir_comme_traduction_objet' => 'Ce espaces est une traduction du espaces numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce espaces',
        'titre_objets_rubrique' => 'Espace de la rubrique',
        'info_objets_auteur' => 'Les espace de cet auteur',
        'retirer_lien_objet' => 'Retirer ce espaces',
        'retirer_tous_liens_objets' => 'Retirer tous les espace',
        'ajouter_lien_objet' => 'Ajouter ce espaces',
        'texte_ajouter_objet' => 'Ajouter un espaces',
        'texte_creer_associer_objet' => 'Créer et associer un espaces',
        'texte_changer_statut_objet' => 'Ce espaces est :',
        'supprimer_objet' => 'Supprimer cet espaces',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet espaces ?',
      ),
      'liaison_directe' => '',
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_immeubles',
      ),
      'afficher_liens' => 'on',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => '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',
          ),
        ),
      ),
    ),
  ),
);
