<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit405704b77720fc10cb62e297a751511c
{
    public static $files = array (
        '7aed44d824e149ce152c0fb82af9379a' => __DIR__ . '/..' . '/colinodell/json5/src/global.php',
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'C' => 
        array (
            'ColorThief\\' => 11,
            'ColinODell\\Json5\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'ColorThief\\' => 
        array (
            0 => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief',
        ),
        'ColinODell\\Json5\\' => 
        array (
            0 => __DIR__ . '/..' . '/colinodell/json5/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'ColinODell\\Json5\\Json5Decoder' => __DIR__ . '/..' . '/colinodell/json5/src/Json5Decoder.php',
        'ColinODell\\Json5\\SyntaxError' => __DIR__ . '/..' . '/colinodell/json5/src/SyntaxError.php',
        'ColorThief\\CMap' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/CMap.php',
        'ColorThief\\ColorThief' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/ColorThief.php',
        'ColorThief\\Image\\Adapter\\GDImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/GDImageAdapter.php',
        'ColorThief\\Image\\Adapter\\GmagickImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/GmagickImageAdapter.php',
        'ColorThief\\Image\\Adapter\\IImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/IImageAdapter.php',
        'ColorThief\\Image\\Adapter\\ImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/ImageAdapter.php',
        'ColorThief\\Image\\Adapter\\ImagickImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/ImagickImageAdapter.php',
        'ColorThief\\Image\\ImageLoader' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/ImageLoader.php',
        'ColorThief\\PQueue' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/PQueue.php',
        'ColorThief\\VBox' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/VBox.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'League\\ColorExtractor\\Color' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Color.php',
        'League\\ColorExtractor\\ColorExtractor' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/ColorExtractor.php',
        'League\\ColorExtractor\\Palette' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Palette.php',
        'League\\Flysystem\\AdapterInterface' => __DIR__ . '/..' . '/league/flysystem/src/AdapterInterface.php',
        'League\\Flysystem\\Adapter\\AbstractAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/AbstractAdapter.php',
        'League\\Flysystem\\Adapter\\AbstractFtpAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/AbstractFtpAdapter.php',
        'League\\Flysystem\\Adapter\\CanOverwriteFiles' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/CanOverwriteFiles.php',
        'League\\Flysystem\\Adapter\\Ftp' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Ftp.php',
        'League\\Flysystem\\Adapter\\Ftpd' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Ftpd.php',
        'League\\Flysystem\\Adapter\\Local' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Local.php',
        'League\\Flysystem\\Adapter\\NullAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/NullAdapter.php',
        'League\\Flysystem\\Adapter\\Polyfill\\NotSupportingVisibilityTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/NotSupportingVisibilityTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedCopyTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedCopyTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedReadingTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedReadingTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedWritingTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedWritingTrait.php',
        'League\\Flysystem\\Adapter\\SynologyFtp' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/SynologyFtp.php',
        'League\\Flysystem\\Config' => __DIR__ . '/..' . '/league/flysystem/src/Config.php',
        'League\\Flysystem\\ConfigAwareTrait' => __DIR__ . '/..' . '/league/flysystem/src/ConfigAwareTrait.php',
        'League\\Flysystem\\Directory' => __DIR__ . '/..' . '/league/flysystem/src/Directory.php',
        'League\\Flysystem\\Exception' => __DIR__ . '/..' . '/league/flysystem/src/Exception.php',
        'League\\Flysystem\\File' => __DIR__ . '/..' . '/league/flysystem/src/File.php',
        'League\\Flysystem\\FileExistsException' => __DIR__ . '/..' . '/league/flysystem/src/FileExistsException.php',
        'League\\Flysystem\\FileNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/FileNotFoundException.php',
        'League\\Flysystem\\Filesystem' => __DIR__ . '/..' . '/league/flysystem/src/Filesystem.php',
        'League\\Flysystem\\FilesystemInterface' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemInterface.php',
        'League\\Flysystem\\FilesystemNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemNotFoundException.php',
        'League\\Flysystem\\Handler' => __DIR__ . '/..' . '/league/flysystem/src/Handler.php',
        'League\\Flysystem\\MountManager' => __DIR__ . '/..' . '/league/flysystem/src/MountManager.php',
        'League\\Flysystem\\NotSupportedException' => __DIR__ . '/..' . '/league/flysystem/src/NotSupportedException.php',
        'League\\Flysystem\\PluginInterface' => __DIR__ . '/..' . '/league/flysystem/src/PluginInterface.php',
        'League\\Flysystem\\Plugin\\AbstractPlugin' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/AbstractPlugin.php',
        'League\\Flysystem\\Plugin\\EmptyDir' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/EmptyDir.php',
        'League\\Flysystem\\Plugin\\ForcedCopy' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ForcedCopy.php',
        'League\\Flysystem\\Plugin\\ForcedRename' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ForcedRename.php',
        'League\\Flysystem\\Plugin\\GetWithMetadata' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/GetWithMetadata.php',
        'League\\Flysystem\\Plugin\\ListFiles' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListFiles.php',
        'League\\Flysystem\\Plugin\\ListPaths' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListPaths.php',
        'League\\Flysystem\\Plugin\\ListWith' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListWith.php',
        'League\\Flysystem\\Plugin\\PluggableTrait' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/PluggableTrait.php',
        'League\\Flysystem\\Plugin\\PluginNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/PluginNotFoundException.php',
        'League\\Flysystem\\ReadInterface' => __DIR__ . '/..' . '/league/flysystem/src/ReadInterface.php',
        'League\\Flysystem\\RootViolationException' => __DIR__ . '/..' . '/league/flysystem/src/RootViolationException.php',
        'League\\Flysystem\\SafeStorage' => __DIR__ . '/..' . '/league/flysystem/src/SafeStorage.php',
        'League\\Flysystem\\UnreadableFileException' => __DIR__ . '/..' . '/league/flysystem/src/UnreadableFileException.php',
        'League\\Flysystem\\Util' => __DIR__ . '/..' . '/league/flysystem/src/Util.php',
        'League\\Flysystem\\Util\\ContentListingFormatter' => __DIR__ . '/..' . '/league/flysystem/src/Util/ContentListingFormatter.php',
        'League\\Flysystem\\Util\\MimeType' => __DIR__ . '/..' . '/league/flysystem/src/Util/MimeType.php',
        'League\\Flysystem\\Util\\StreamHasher' => __DIR__ . '/..' . '/league/flysystem/src/Util/StreamHasher.php',
        'MongoDB\\BulkWriteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/BulkWriteResult.php',
        'MongoDB\\ChangeStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/ChangeStream.php',
        'MongoDB\\Client' => __DIR__ . '/..' . '/mongodb/mongodb/src/Client.php',
        'MongoDB\\Collection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Collection.php',
        'MongoDB\\Database' => __DIR__ . '/..' . '/mongodb/mongodb/src/Database.php',
        'MongoDB\\DeleteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/DeleteResult.php',
        'MongoDB\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/BadMethodCallException.php',
        'MongoDB\\Exception\\Exception' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/Exception.php',
        'MongoDB\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/InvalidArgumentException.php',
        'MongoDB\\Exception\\ResumeTokenException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/ResumeTokenException.php',
        'MongoDB\\Exception\\RuntimeException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/RuntimeException.php',
        'MongoDB\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnexpectedValueException.php',
        'MongoDB\\Exception\\UnsupportedException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnsupportedException.php',
        'MongoDB\\GridFS\\Bucket' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Bucket.php',
        'MongoDB\\GridFS\\CollectionWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/CollectionWrapper.php',
        'MongoDB\\GridFS\\Exception\\CorruptFileException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/CorruptFileException.php',
        'MongoDB\\GridFS\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/FileNotFoundException.php',
        'MongoDB\\GridFS\\ReadableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/ReadableStream.php',
        'MongoDB\\GridFS\\StreamWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/StreamWrapper.php',
        'MongoDB\\GridFS\\WritableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/WritableStream.php',
        'MongoDB\\InsertManyResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertManyResult.php',
        'MongoDB\\InsertOneResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertOneResult.php',
        'MongoDB\\MapReduceResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/MapReduceResult.php',
        'MongoDB\\Model\\BSONArray' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONArray.php',
        'MongoDB\\Model\\BSONDocument' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONDocument.php',
        'MongoDB\\Model\\BSONIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONIterator.php',
        'MongoDB\\Model\\CachingIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CachingIterator.php',
        'MongoDB\\Model\\CollectionInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfo.php',
        'MongoDB\\Model\\CollectionInfoCommandIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoCommandIterator.php',
        'MongoDB\\Model\\CollectionInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfo.php',
        'MongoDB\\Model\\DatabaseInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfoLegacyIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoLegacyIterator.php',
        'MongoDB\\Model\\IndexInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfo.php',
        'MongoDB\\Model\\IndexInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIterator.php',
        'MongoDB\\Model\\IndexInfoIteratorIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIteratorIterator.php',
        'MongoDB\\Model\\IndexInput' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInput.php',
        'MongoDB\\Model\\TypeMapArrayIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/TypeMapArrayIterator.php',
        'MongoDB\\Operation\\Aggregate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Aggregate.php',
        'MongoDB\\Operation\\BulkWrite' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/BulkWrite.php',
        'MongoDB\\Operation\\Count' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Count.php',
        'MongoDB\\Operation\\CountDocuments' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CountDocuments.php',
        'MongoDB\\Operation\\CreateCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateCollection.php',
        'MongoDB\\Operation\\CreateIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateIndexes.php',
        'MongoDB\\Operation\\DatabaseCommand' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DatabaseCommand.php',
        'MongoDB\\Operation\\Delete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Delete.php',
        'MongoDB\\Operation\\DeleteMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteMany.php',
        'MongoDB\\Operation\\DeleteOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteOne.php',
        'MongoDB\\Operation\\Distinct' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Distinct.php',
        'MongoDB\\Operation\\DropCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropCollection.php',
        'MongoDB\\Operation\\DropDatabase' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropDatabase.php',
        'MongoDB\\Operation\\DropIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropIndexes.php',
        'MongoDB\\Operation\\EstimatedDocumentCount' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/EstimatedDocumentCount.php',
        'MongoDB\\Operation\\Executable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Executable.php',
        'MongoDB\\Operation\\Explain' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Explain.php',
        'MongoDB\\Operation\\Explainable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Explainable.php',
        'MongoDB\\Operation\\Find' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Find.php',
        'MongoDB\\Operation\\FindAndModify' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindAndModify.php',
        'MongoDB\\Operation\\FindOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOne.php',
        'MongoDB\\Operation\\FindOneAndDelete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndDelete.php',
        'MongoDB\\Operation\\FindOneAndReplace' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndReplace.php',
        'MongoDB\\Operation\\FindOneAndUpdate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndUpdate.php',
        'MongoDB\\Operation\\InsertMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertMany.php',
        'MongoDB\\Operation\\InsertOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertOne.php',
        'MongoDB\\Operation\\ListCollections' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListCollections.php',
        'MongoDB\\Operation\\ListDatabases' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListDatabases.php',
        'MongoDB\\Operation\\ListIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListIndexes.php',
        'MongoDB\\Operation\\MapReduce' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/MapReduce.php',
        'MongoDB\\Operation\\ModifyCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ModifyCollection.php',
        'MongoDB\\Operation\\ReplaceOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ReplaceOne.php',
        'MongoDB\\Operation\\Update' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Update.php',
        'MongoDB\\Operation\\UpdateMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateMany.php',
        'MongoDB\\Operation\\UpdateOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateOne.php',
        'MongoDB\\Operation\\Watch' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Watch.php',
        'MongoDB\\UpdateResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/UpdateResult.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/..' . '/erusev/parsedown-extra/ParsedownExtra.php',
        'ZipStream\\Exception' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception.php',
        'ZipStream\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/FileNotFoundException.php',
        'ZipStream\\Exception\\FileNotReadableException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/FileNotReadableException.php',
        'ZipStream\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/InvalidOptionException.php',
        'ZipStream\\Exception\\StreamNotReadableException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/StreamNotReadableException.php',
        'ZipStream\\ZipStream' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/ZipStream.php',
        'claviska\\SimpleImage' => __DIR__ . '/..' . '/claviska/simpleimage/src/claviska/SimpleImage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit405704b77720fc10cb62e297a751511c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit405704b77720fc10cb62e297a751511c::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit405704b77720fc10cb62e297a751511c::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit405704b77720fc10cb62e297a751511c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit405704b77720fc10cb62e297a751511c::$classMap;

        }, null, ClassLoader::class);
    }
}
