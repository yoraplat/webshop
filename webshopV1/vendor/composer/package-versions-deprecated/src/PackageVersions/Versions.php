<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.0.3@c9622c6820d3ede1e2315a6a377ea1076e421d88',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.x-dev@2c193548ca5ba7b1d66c9590f079fb2240fd0302',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.1@7f472cc85eba050a83fcf38cece87b868877d7e2',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.2@1c2780df6b58998f411e64973cfa464ba0a06e00',
  'doctrine/orm' => '2.9.2@75b4b88c5b7cebc24ed7251a20c2a5aa027300e1',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.3.0@1beb4447f9efd26041eba7eff50614e798c353fd',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.1.5@62c5909f49cf74dccdf50a294511cc24be2f969c',
  'symfony/asset' => '5.4.x-dev@465943866ccfe37082ebfea7a3ac8b4e0179d6de',
  'symfony/cache' => '5.4.x-dev@b602a626efbb17711aca9748e5a0341a98dec599',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => '5.4.x-dev@db7f82ee863ec4ebaed87fb2b036a76510259da9',
  'symfony/console' => '5.4.x-dev@a41315acd97c15f296092d9fde11a30103ae6c26',
  'symfony/dependency-injection' => '5.4.x-dev@2348d4ac592ca74e49d51bf7ccf56bc22b3108b3',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => '5.4.x-dev@7fb05ad7936d3750876c7594f3439a5d4cad7749',
  'symfony/dotenv' => '5.4.x-dev@4ababad35dbb739b521614d3094d7e5e0d1d06e4',
  'symfony/error-handler' => '5.4.x-dev@f5ae1a4298b754594c66535bbce0f0d6e06c008d',
  'symfony/event-dispatcher' => '5.4.x-dev@aecf90ffee8f1d2a2c169ec51cd1177027fc3ace',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => '5.4.x-dev@324a7c08fc19fbda9c96c13962dfb2e17f54a531',
  'symfony/filesystem' => '5.4.x-dev@348116319d7fb7d1faa781d26a48922428013eb2',
  'symfony/finder' => '5.4.x-dev@ccccb9d48ca42757dd12f2ca4bf857a4e217d90d',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => '5.4.x-dev@abb3462129d54876e784eef2beea73731736e12c',
  'symfony/framework-bundle' => '5.4.x-dev@414b55783a9d9e45fd2f0798c3ba11d33293a4b4',
  'symfony/http-client' => '5.4.x-dev@abac7e02da270806868346746e9084cbc2e5f3ed',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => '5.4.x-dev@d776c3bd60a7a529175b3c4b282f1fecdf6d7b9f',
  'symfony/http-kernel' => '5.4.x-dev@6486ca4f71214eb04d0009efb19aab44b488b6ef',
  'symfony/intl' => '5.4.x-dev@bb7376e843910a2ee650431013463cc6a83f456c',
  'symfony/mailer' => '5.4.x-dev@6dca77f3d0038edb17bcb5970f744a516578d586',
  'symfony/mime' => '5.4.x-dev@8210beb33ece7f0624d87b0f49dc70bdfcef2cfa',
  'symfony/monolog-bridge' => '5.4.x-dev@9e336ff9a9ea7433179d4f961a32ef7a603d7324',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/notifier' => '5.4.x-dev@8720dfe4b6d1c7fed545f1b2dc7072d7c7eabfc6',
  'symfony/options-resolver' => '5.4.x-dev@162e886ca035869866d233a2bfef70cc28f9bbe5',
  'symfony/password-hasher' => '5.4.x-dev@1e66f5423f44a175b32333c3197990bd2ab702cc',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => '5.4.x-dev@53e36cb1c160505cdaf1ef201501669c4c317191',
  'symfony/property-access' => '5.4.x-dev@fd89ef387030f4d4126fd9cddcc18dbfed27a346',
  'symfony/property-info' => '5.4.x-dev@a45839949b03e1437837000ce8319a9214974501',
  'symfony/proxy-manager-bridge' => '5.4.x-dev@a87444e1c0ae52d732011733c2d0baf183d34e9e',
  'symfony/routing' => '5.4.x-dev@d9b66a07fbbf0c7728f9654a26f3c89cfa15bcd6',
  'symfony/runtime' => '5.4.x-dev@02c710b4448b35d3a12da0c315ee065100ac7778',
  'symfony/security-bundle' => '5.4.x-dev@a489dded600a051f18e090f4e4496110c6cc1c52',
  'symfony/security-core' => '5.4.x-dev@421d23a501127c99e3d6c23302c1691cf4335d0d',
  'symfony/security-csrf' => '5.4.x-dev@03010e75105759cf171f3429133e26801186ed85',
  'symfony/security-guard' => '5.4.x-dev@240c71e09ce3f6acc2251495855353737aacff02',
  'symfony/security-http' => '5.4.x-dev@0f66d617e96f0ed540459945a233302a2243da40',
  'symfony/serializer' => '5.4.x-dev@2ca653a05b02023046b879e1a89217f7c087d588',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => '5.4.x-dev@8b99a525d24c264990d07f8db3e709d11b2651e9',
  'symfony/string' => '5.4.x-dev@07417941ec86fa429b4b108e1217a656816483d5',
  'symfony/translation' => '5.4.x-dev@3710e2fd9d43cfe7bc88a4312ce95f6a5509bd49',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => '5.4.x-dev@218a1ada2f7d0ce96225878c5818f9069dcfdae0',
  'symfony/twig-bundle' => '5.4.x-dev@2aebe44a60887244fb2b21a17b50045ed3fabd2b',
  'symfony/validator' => '5.4.x-dev@7c214ec359bccf393dffe0fc2a34ad587a646176',
  'symfony/var-dumper' => '5.4.x-dev@173cf39010292d1de114f3a086e50fd27dc9d0d6',
  'symfony/var-exporter' => '5.4.x-dev@74b0c1b4116640dcd34240c2a4cd61c71fb24a4e',
  'symfony/web-link' => '5.4.x-dev@f1e15f28812865dbf3ffe68e7feba6b23fc5f667',
  'symfony/webpack-encore-bundle' => 'v1.11.2@f282fb17ffa4839ba491eb7e3f5ffdd40c86f969',
  'symfony/yaml' => '5.4.x-dev@7cda21186dabba9fc064e5991cbc72f9851049c1',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.4@c73c6737305e779771147af66c96ca6a7ed8a741',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.2@a90ccbddffa067b51f574dea6eb25d5680839455',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.2@0d1c587401514d17e8f9258a27e23527cb1b06c1',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => '5.4.x-dev@4ec25538fdba87442ad043231f4d208cac6eda77',
  'symfony/css-selector' => '5.4.x-dev@5d5f97809015102116208b976eb2edb44b689560',
  'symfony/debug-bundle' => '5.4.x-dev@ea0d4732b3f807f90c62301f1dda54f8b2d34b6f',
  'symfony/dom-crawler' => '5.4.x-dev@194246b6c6481985963b641d1540f757913782c0',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'symfony/phpunit-bridge' => 'v5.3.0@15cab721487b7bf43ad545a1e7d0095782e26f8c',
  'symfony/web-profiler-bundle' => '5.4.x-dev@06b5b3d6efe8f46176eaf9328cf1dc217072bf53',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'symfony/polyfill-ctype' => '*@9bab817b962794cf9a960d9387e16eb49e5692d3',
  'symfony/polyfill-iconv' => '*@9bab817b962794cf9a960d9387e16eb49e5692d3',
  'symfony/polyfill-php72' => '*@9bab817b962794cf9a960d9387e16eb49e5692d3',
  '__root__' => 'dev-master@9bab817b962794cf9a960d9387e16eb49e5692d3',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
