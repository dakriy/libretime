<?php


/**
 * Base static class for performing query and update operations on the 'imported_podcast' table.
 *
 *
 *
 * @package propel.generator.airtime.om
 */
abstract class BaseImportedPodcastPeer extends PodcastPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'airtime';

    /** the table name for this class */
    const TABLE_NAME = 'imported_podcast';

    /** the related Propel class for this table */
    const OM_CLASS = 'ImportedPodcast';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ImportedPodcastTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the url field */
    const URL = 'imported_podcast.url';

    /** the column name for the auto_ingest field */
    const AUTO_INGEST = 'imported_podcast.auto_ingest';

    /** the column name for the id field */
    const ID = 'imported_podcast.id';

    /** the column name for the title field */
    const TITLE = 'imported_podcast.title';

    /** the column name for the creator field */
    const CREATOR = 'imported_podcast.creator';

    /** the column name for the description field */
    const DESCRIPTION = 'imported_podcast.description';

    /** the column name for the language field */
    const LANGUAGE = 'imported_podcast.language';

    /** the column name for the copyright field */
    const COPYRIGHT = 'imported_podcast.copyright';

    /** the column name for the link field */
    const LINK = 'imported_podcast.link';

    /** the column name for the itunes_author field */
    const ITUNES_AUTHOR = 'imported_podcast.itunes_author';

    /** the column name for the itunes_keywords field */
    const ITUNES_KEYWORDS = 'imported_podcast.itunes_keywords';

    /** the column name for the itunes_summary field */
    const ITUNES_SUMMARY = 'imported_podcast.itunes_summary';

    /** the column name for the itunes_subtitle field */
    const ITUNES_SUBTITLE = 'imported_podcast.itunes_subtitle';

    /** the column name for the itunes_category field */
    const ITUNES_CATEGORY = 'imported_podcast.itunes_category';

    /** the column name for the itunes_explicit field */
    const ITUNES_EXPLICIT = 'imported_podcast.itunes_explicit';

    /** the column name for the owner field */
    const OWNER = 'imported_podcast.owner';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ImportedPodcast objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ImportedPodcast[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ImportedPodcastPeer::$fieldNames[ImportedPodcastPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('DbUrl', 'DbAutoIngest', 'DbId', 'DbTitle', 'DbCreator', 'DbDescription', 'DbLanguage', 'DbCopyright', 'DbLink', 'DbItunesAuthor', 'DbItunesKeywords', 'DbItunesSummary', 'DbItunesSubtitle', 'DbItunesCategory', 'DbItunesExplicit', 'DbOwner', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('dbUrl', 'dbAutoIngest', 'dbId', 'dbTitle', 'dbCreator', 'dbDescription', 'dbLanguage', 'dbCopyright', 'dbLink', 'dbItunesAuthor', 'dbItunesKeywords', 'dbItunesSummary', 'dbItunesSubtitle', 'dbItunesCategory', 'dbItunesExplicit', 'dbOwner', ),
        BasePeer::TYPE_COLNAME => array (ImportedPodcastPeer::URL, ImportedPodcastPeer::AUTO_INGEST, ImportedPodcastPeer::ID, ImportedPodcastPeer::TITLE, ImportedPodcastPeer::CREATOR, ImportedPodcastPeer::DESCRIPTION, ImportedPodcastPeer::LANGUAGE, ImportedPodcastPeer::COPYRIGHT, ImportedPodcastPeer::LINK, ImportedPodcastPeer::ITUNES_AUTHOR, ImportedPodcastPeer::ITUNES_KEYWORDS, ImportedPodcastPeer::ITUNES_SUMMARY, ImportedPodcastPeer::ITUNES_SUBTITLE, ImportedPodcastPeer::ITUNES_CATEGORY, ImportedPodcastPeer::ITUNES_EXPLICIT, ImportedPodcastPeer::OWNER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('URL', 'AUTO_INGEST', 'ID', 'TITLE', 'CREATOR', 'DESCRIPTION', 'LANGUAGE', 'COPYRIGHT', 'LINK', 'ITUNES_AUTHOR', 'ITUNES_KEYWORDS', 'ITUNES_SUMMARY', 'ITUNES_SUBTITLE', 'ITUNES_CATEGORY', 'ITUNES_EXPLICIT', 'OWNER', ),
        BasePeer::TYPE_FIELDNAME => array ('url', 'auto_ingest', 'id', 'title', 'creator', 'description', 'language', 'copyright', 'link', 'itunes_author', 'itunes_keywords', 'itunes_summary', 'itunes_subtitle', 'itunes_category', 'itunes_explicit', 'owner', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ImportedPodcastPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('DbUrl' => 0, 'DbAutoIngest' => 1, 'DbId' => 2, 'DbTitle' => 3, 'DbCreator' => 4, 'DbDescription' => 5, 'DbLanguage' => 6, 'DbCopyright' => 7, 'DbLink' => 8, 'DbItunesAuthor' => 9, 'DbItunesKeywords' => 10, 'DbItunesSummary' => 11, 'DbItunesSubtitle' => 12, 'DbItunesCategory' => 13, 'DbItunesExplicit' => 14, 'DbOwner' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('dbUrl' => 0, 'dbAutoIngest' => 1, 'dbId' => 2, 'dbTitle' => 3, 'dbCreator' => 4, 'dbDescription' => 5, 'dbLanguage' => 6, 'dbCopyright' => 7, 'dbLink' => 8, 'dbItunesAuthor' => 9, 'dbItunesKeywords' => 10, 'dbItunesSummary' => 11, 'dbItunesSubtitle' => 12, 'dbItunesCategory' => 13, 'dbItunesExplicit' => 14, 'dbOwner' => 15, ),
        BasePeer::TYPE_COLNAME => array (ImportedPodcastPeer::URL => 0, ImportedPodcastPeer::AUTO_INGEST => 1, ImportedPodcastPeer::ID => 2, ImportedPodcastPeer::TITLE => 3, ImportedPodcastPeer::CREATOR => 4, ImportedPodcastPeer::DESCRIPTION => 5, ImportedPodcastPeer::LANGUAGE => 6, ImportedPodcastPeer::COPYRIGHT => 7, ImportedPodcastPeer::LINK => 8, ImportedPodcastPeer::ITUNES_AUTHOR => 9, ImportedPodcastPeer::ITUNES_KEYWORDS => 10, ImportedPodcastPeer::ITUNES_SUMMARY => 11, ImportedPodcastPeer::ITUNES_SUBTITLE => 12, ImportedPodcastPeer::ITUNES_CATEGORY => 13, ImportedPodcastPeer::ITUNES_EXPLICIT => 14, ImportedPodcastPeer::OWNER => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('URL' => 0, 'AUTO_INGEST' => 1, 'ID' => 2, 'TITLE' => 3, 'CREATOR' => 4, 'DESCRIPTION' => 5, 'LANGUAGE' => 6, 'COPYRIGHT' => 7, 'LINK' => 8, 'ITUNES_AUTHOR' => 9, 'ITUNES_KEYWORDS' => 10, 'ITUNES_SUMMARY' => 11, 'ITUNES_SUBTITLE' => 12, 'ITUNES_CATEGORY' => 13, 'ITUNES_EXPLICIT' => 14, 'OWNER' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('url' => 0, 'auto_ingest' => 1, 'id' => 2, 'title' => 3, 'creator' => 4, 'description' => 5, 'language' => 6, 'copyright' => 7, 'link' => 8, 'itunes_author' => 9, 'itunes_keywords' => 10, 'itunes_summary' => 11, 'itunes_subtitle' => 12, 'itunes_category' => 13, 'itunes_explicit' => 14, 'owner' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ImportedPodcastPeer::getFieldNames($toType);
        $key = isset(ImportedPodcastPeer::$fieldKeys[$fromType][$name]) ? ImportedPodcastPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ImportedPodcastPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ImportedPodcastPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ImportedPodcastPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ImportedPodcastPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ImportedPodcastPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ImportedPodcastPeer::URL);
            $criteria->addSelectColumn(ImportedPodcastPeer::AUTO_INGEST);
            $criteria->addSelectColumn(ImportedPodcastPeer::ID);
            $criteria->addSelectColumn(ImportedPodcastPeer::TITLE);
            $criteria->addSelectColumn(ImportedPodcastPeer::CREATOR);
            $criteria->addSelectColumn(ImportedPodcastPeer::DESCRIPTION);
            $criteria->addSelectColumn(ImportedPodcastPeer::LANGUAGE);
            $criteria->addSelectColumn(ImportedPodcastPeer::COPYRIGHT);
            $criteria->addSelectColumn(ImportedPodcastPeer::LINK);
            $criteria->addSelectColumn(ImportedPodcastPeer::ITUNES_AUTHOR);
            $criteria->addSelectColumn(ImportedPodcastPeer::ITUNES_KEYWORDS);
            $criteria->addSelectColumn(ImportedPodcastPeer::ITUNES_SUMMARY);
            $criteria->addSelectColumn(ImportedPodcastPeer::ITUNES_SUBTITLE);
            $criteria->addSelectColumn(ImportedPodcastPeer::ITUNES_CATEGORY);
            $criteria->addSelectColumn(ImportedPodcastPeer::ITUNES_EXPLICIT);
            $criteria->addSelectColumn(ImportedPodcastPeer::OWNER);
        } else {
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.auto_ingest');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.creator');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.language');
            $criteria->addSelectColumn($alias . '.copyright');
            $criteria->addSelectColumn($alias . '.link');
            $criteria->addSelectColumn($alias . '.itunes_author');
            $criteria->addSelectColumn($alias . '.itunes_keywords');
            $criteria->addSelectColumn($alias . '.itunes_summary');
            $criteria->addSelectColumn($alias . '.itunes_subtitle');
            $criteria->addSelectColumn($alias . '.itunes_category');
            $criteria->addSelectColumn($alias . '.itunes_explicit');
            $criteria->addSelectColumn($alias . '.owner');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return ImportedPodcast
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ImportedPodcastPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ImportedPodcastPeer::populateObjects(ImportedPodcastPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param ImportedPodcast $obj A ImportedPodcast object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getDbId();
            } // if key === null
            ImportedPodcastPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A ImportedPodcast object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ImportedPodcast) {
                $key = (string) $value->getDbId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ImportedPodcast object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ImportedPodcastPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ImportedPodcast Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ImportedPodcastPeer::$instances[$key])) {
                return ImportedPodcastPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ImportedPodcastPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ImportedPodcastPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to imported_podcast
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol + 2];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ImportedPodcastPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ImportedPodcastPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ImportedPodcastPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (ImportedPodcast object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ImportedPodcastPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ImportedPodcastPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ImportedPodcastPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ImportedPodcastPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Podcast table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPodcast(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ImportedPodcastPeer::ID, PodcastPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CcSubjs table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCcSubjs(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ImportedPodcastPeer::OWNER, CcSubjsPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ImportedPodcast objects pre-filled with their Podcast objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ImportedPodcast objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPodcast(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);
        }

        ImportedPodcastPeer::addSelectColumns($criteria);
        $startcol = ImportedPodcastPeer::NUM_HYDRATE_COLUMNS;
        PodcastPeer::addSelectColumns($criteria);

        $criteria->addJoin(ImportedPodcastPeer::ID, PodcastPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ImportedPodcastPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ImportedPodcastPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ImportedPodcastPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PodcastPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PodcastPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PodcastPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PodcastPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ImportedPodcast) to $obj2 (Podcast)
                // one to one relationship
                $obj1->setPodcast($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ImportedPodcast objects pre-filled with their CcSubjs objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ImportedPodcast objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCcSubjs(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);
        }

        ImportedPodcastPeer::addSelectColumns($criteria);
        $startcol = ImportedPodcastPeer::NUM_HYDRATE_COLUMNS;
        CcSubjsPeer::addSelectColumns($criteria);

        $criteria->addJoin(ImportedPodcastPeer::OWNER, CcSubjsPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ImportedPodcastPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ImportedPodcastPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ImportedPodcastPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CcSubjsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CcSubjsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CcSubjsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CcSubjsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ImportedPodcast) to $obj2 (CcSubjs)
                $obj2->addImportedPodcast($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ImportedPodcastPeer::ID, PodcastPeer::ID, $join_behavior);

        $criteria->addJoin(ImportedPodcastPeer::OWNER, CcSubjsPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of ImportedPodcast objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ImportedPodcast objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);
        }

        ImportedPodcastPeer::addSelectColumns($criteria);
        $startcol2 = ImportedPodcastPeer::NUM_HYDRATE_COLUMNS;

        PodcastPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PodcastPeer::NUM_HYDRATE_COLUMNS;

        CcSubjsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CcSubjsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ImportedPodcastPeer::ID, PodcastPeer::ID, $join_behavior);

        $criteria->addJoin(ImportedPodcastPeer::OWNER, CcSubjsPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ImportedPodcastPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ImportedPodcastPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ImportedPodcastPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Podcast rows

            $key2 = PodcastPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = PodcastPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PodcastPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PodcastPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ImportedPodcast) to the collection in $obj2 (Podcast)
                $obj1->setPodcast($obj2);
            } // if joined row not null

            // Add objects for joined CcSubjs rows

            $key3 = CcSubjsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CcSubjsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CcSubjsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CcSubjsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (ImportedPodcast) to the collection in $obj3 (CcSubjs)
                $obj3->addImportedPodcast($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Podcast table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPodcast(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ImportedPodcastPeer::OWNER, CcSubjsPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CcSubjs table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCcSubjs(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ImportedPodcastPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ImportedPodcastPeer::ID, PodcastPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ImportedPodcast objects pre-filled with all related objects except Podcast.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ImportedPodcast objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPodcast(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);
        }

        ImportedPodcastPeer::addSelectColumns($criteria);
        $startcol2 = ImportedPodcastPeer::NUM_HYDRATE_COLUMNS;

        CcSubjsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CcSubjsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ImportedPodcastPeer::OWNER, CcSubjsPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ImportedPodcastPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ImportedPodcastPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ImportedPodcastPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CcSubjs rows

                $key2 = CcSubjsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CcSubjsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CcSubjsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CcSubjsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ImportedPodcast) to the collection in $obj2 (CcSubjs)
                $obj2->addImportedPodcast($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ImportedPodcast objects pre-filled with all related objects except CcSubjs.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ImportedPodcast objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCcSubjs(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);
        }

        ImportedPodcastPeer::addSelectColumns($criteria);
        $startcol2 = ImportedPodcastPeer::NUM_HYDRATE_COLUMNS;

        PodcastPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PodcastPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ImportedPodcastPeer::ID, PodcastPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ImportedPodcastPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ImportedPodcastPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ImportedPodcastPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ImportedPodcastPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Podcast rows

                $key2 = PodcastPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PodcastPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = PodcastPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PodcastPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ImportedPodcast) to the collection in $obj2 (Podcast)
                $obj1->setPodcast($obj2);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ImportedPodcastPeer::DATABASE_NAME)->getTable(ImportedPodcastPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseImportedPodcastPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseImportedPodcastPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ImportedPodcastTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ImportedPodcastPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ImportedPodcast or Criteria object.
     *
     * @param      mixed $values Criteria or ImportedPodcast object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ImportedPodcast object
        }


        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a ImportedPodcast or Criteria object.
     *
     * @param      mixed $values Criteria or ImportedPodcast object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ImportedPodcastPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ImportedPodcastPeer::ID);
            $value = $criteria->remove(ImportedPodcastPeer::ID);
            if ($value) {
                $selectCriteria->add(ImportedPodcastPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ImportedPodcastPeer::TABLE_NAME);
            }

        } else { // $values is ImportedPodcast object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the imported_podcast table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ImportedPodcastPeer::TABLE_NAME, $con, ImportedPodcastPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ImportedPodcastPeer::clearInstancePool();
            ImportedPodcastPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ImportedPodcast or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ImportedPodcast object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ImportedPodcastPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ImportedPodcast) { // it's a model object
            // invalidate the cache for this single object
            ImportedPodcastPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ImportedPodcastPeer::DATABASE_NAME);
            $criteria->add(ImportedPodcastPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ImportedPodcastPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ImportedPodcastPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ImportedPodcastPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ImportedPodcast object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ImportedPodcast $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ImportedPodcastPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ImportedPodcastPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ImportedPodcastPeer::DATABASE_NAME, ImportedPodcastPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ImportedPodcast
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ImportedPodcastPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ImportedPodcastPeer::DATABASE_NAME);
        $criteria->add(ImportedPodcastPeer::ID, $pk);

        $v = ImportedPodcastPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ImportedPodcast[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ImportedPodcastPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ImportedPodcastPeer::DATABASE_NAME);
            $criteria->add(ImportedPodcastPeer::ID, $pks, Criteria::IN);
            $objs = ImportedPodcastPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseImportedPodcastPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseImportedPodcastPeer::buildTableMap();
