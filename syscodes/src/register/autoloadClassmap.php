<?php 

/*
|------------------------------------------------------------------------
| Lenevor Config Class Map                                                      
|------------------------------------------------------------------------
|
| This file is automatically generated for build classmap. 
|
| Note: [!!] Do not modify it directly.
|
*/

return [
    
    'App\\Console\\Lenevor' => APP_PATH.'Console/Lenevor.php',
    'App\\Exceptions\\Handler' => APP_PATH.'Exceptions/Handler.php',
    'App\\Http\\Controller' => APP_PATH.'Http/Controller.php',
    'App\\Http\\Lenevor' => APP_PATH.'Http/Lenevor.php',
    'App\\Providers\\AppServiceProvider' => APP_PATH.'Providers/AppServiceProvider.php',
    'App\\Providers\\EventServiceProvider' => APP_PATH.'Providers/EventServiceProvider.php',
    'App\\Providers\\RouteServiceProvider' => APP_PATH.'Providers/RouteServiceProvider.php',
    'Syscodes\\Cache\\Exceptions\\CacheException' => SYS_PATH.'src/components/Cache/Exceptions/CacheException.php',
    'Syscodes\\Cache\\Store\\ApcStore' => SYS_PATH.'src/components/Cache/Store/ApcStore',
    'Syscodes\\Cache\\Store\\ApcWrapper' => SYS_PATH.'src/components/Cache/Store/ApcWrapper',
    'Syscodes\\Cache\\Store\\ArrayStore' => SYS_PATH.'src/components/Cache/Store/ArrayStore.php',
    'Syscodes\\Cache\\Store\\DatabaseStore' => SYS_PATH.'src/components/Cache/Store/DatabaseStore.php',
    'Syscodes\\Cache\\Store\\FileStore' => SYS_PATH.'src/components/Cache/Store/FileStore.php',
    'Syscodes\\Cache\\Store\\MemcachedConnector' => SYS_PATH.'src/components/Cache/Store/MemcachedConnector.php',
    'Syscodes\\Cache\\Store\\MemcachedStore' => SYS_PATH.'src/components/Cache/Store/MemcachedStore.php',
    'Syscodes\\Cache\\Store\\NullStore' => SYS_PATH.'src/components/Cache/Store/NullStore.php',
    'Syscodes\\Cache\\Store\\RedisStore' => SYS_PATH.'src/components/Cache/Store/RedisStore.php', 
    'Syscodes\\Cache\\Types\\CacheKey' => SYS_PATH.'src/components/Cache/Types/CacheKey.php',  
    'Syscodes\\Cache\\Utils\\FileCacheRegister' => SYS_PATH.'src/components/Cache/Utils/FileCacheRegister.php', 
    'Syscodes\\Cache\\CacheManager' => SYS_PATH.'src/components/Cache/CacheManager.php',
    'Syscodes\\Cache\\CacheRepository' => SYS_PATH.'src/components/Cache/CacheRepository.php',
    'Syscodes\\Cache\\CacheServiceProvider' => SYS_PATH.'src/components/Cache/CacheServiceProvider.php',
    'Syscodes\\Collections\\Traits\\Enumerates' => SYS_PATH.'src/components/Collections/Traits/Enumerates.php',
    'Syscodes\\Collections\\Arr' => SYS_PATH.'src/components/Collections/Arr.php',
    'Syscodes\\Collections\\Collection' => SYS_PATH.'src/components/Collections/Collection.php',
    'Syscodes\\Collections\\HigherOrderTakeProxy' => SYS_PATH.'src/components/Collections/HigherOrderTakeProxy.php',
    'Syscodes\\Config\\AutoloadConfig' => SYS_PATH.'src/components/Config/AutoloadConfig.php',
    'Syscodes\\Config\\Configure' => SYS_PATH.'src/components/Config/Configure.php',  
    'Syscodes\\Console\\Application' => SYS_PATH.'src/components/Console/Application.php',
    'Syscodes\\Console\\Cli' => SYS_PATH.'src/components/Console/Cli.php',
    'Syscodes\\Console\\Command' => SYS_PATH.'src/components/Console/Command.php',
    'Syscodes\\Container\\Exceptions\\ContainerException' => SYS_PATH.'src/components/Container/Exceptions/ContainerException.php',
    'Syscodes\\Container\\Exceptions\\UnknownIdentifierException' => SYS_PATH.'src/components/Container/Exceptions/UnknownIdentifierException.php',
    'Syscodes\\Container\\Container' => SYS_PATH.'src/components/Container/Container.php',
    'Syscodes\\Contracts\\Cache\\Key' => SYS_PATH.'src/components/Contracts/Cache/Key.php',
    'Syscodes\\Contracts\\Cache\\Manager' => SYS_PATH.'src/components/Contracts/Cache/Manager.php',
    'Syscodes\\Contracts\\Cache\\Store' => SYS_PATH.'src/components/Contracts/Cache/Store.php',
    'Syscodes\\Contracts\\Config\\Configure' => SYS_PATH.'src/components/Contracts/Config/Configure.php', 
    'Syscodes\\Contracts\\Console\\Application' => SYS_PATH.'src/components/Contracts/Console/Application.php',
    'Syscodes\\Contracts\\Console\\Lenevor' => SYS_PATH.'src/components/Contracts/Console/Lenevor.php',
    'Syscodes\\Contracts\\Container\\BindingResolutionException' => SYS_PATH.'src/components/Contracts/Container/BindingResolutionException.php',
    'Syscodes\\Contracts\\Container\\Container' => SYS_PATH.'src/components/Contracts/Container/Container.php',
    'Syscodes\\Contracts\\Container\\ExpectedInvokableException' => SYS_PATH.'src/components/Contracts/Container/ExpectedInvokableException.php',
    'Syscodes\\Contracts\\Container\\NotFoundException' => SYS_PATH.'src/components/Contracts/Container/NotFoundException.php',
    'Syscodes\\Contracts\\Core\\Application' => SYS_PATH.'src/components/Contracts/Core/Application.php',
    'Syscodes\\Contracts\\Core\\Lenevor' => SYS_PATH.'src/components/Contracts/Core/Lenevor.php',
    'Syscodes\\Contracts\\Debug\\ExceptionHandler' => SYS_PATH.'src/components/Contracts/Debug/ExceptionHandler.php',
    'Syscodes\\Contracts\\Debug\\Handler' => SYS_PATH.'src/components/Contracts/Debug/Handler.php',
    'Syscodes\\Contracts\\Debug\\Table' => SYS_PATH.'src/components/Contracts/Debug/Table.php',
    'Syscodes\\Contracts\\Dotenv\\Adapter' => SYS_PATH.'src/components/Contracts/Dotenv/Adapter.php',
    'Syscodes\\Contracts\\Dotenv\\Repository' => SYS_PATH.'src/components/Contracts/Dotenv/Repository.php',
    'Syscodes\\Contracts\\Encryption\\Encrypter' => SYS_PATH.'src/components/Contracts/Encryption/Encrypter.php',
    'Syscodes\\Contracts\\Events\\Dispatcher' => SYS_PATH.'src/components/Contracts/Events/Dispatcher.php',
    'Syscodes\\Contracts\\Log\\Handler' => SYS_PATH.'src/components/Contracts/Log/Handler.php',
    'Syscodes\\Contracts\\Pipeline\\Pipeline' => SYS_PATH.'src/components/Contracts/Pipeline/Pipeline.php',
    'Syscodes\\Contracts\\Routing\\Routable' => SYS_PATH.'src/components/Contracts/Routing/Routable.php',
    'Syscodes\\Contracts\\Routing\\RouteResponse' => SYS_PATH.'src/components/Contracts/Routing/RouteResponse.php',
    'Syscodes\\Contracts\\Session\\Session' => SYS_PATH.'src/components/Contracts/Session/Session.php',
    'Syscodes\\Contracts\\Support\\Arrayable' => SYS_PATH.'src/components/Contracts/Support/Arrayable.php',
    'Syscodes\\Contracts\\Support\\Jsonable' => SYS_PATH.'src/components/Contracts/Support/Jsonable.php',
    'Syscodes\\Contracts\\Support\\Renderable' => SYS_PATH.'src/components/Contracts/Support/Renderable.php',
    'Syscodes\\Contracts\\Support\\Webable' => SYS_PATH.'src/components/Contracts/Support/Webable.php',
    'Syscodes\\Contracts\\View\\Engine' => SYS_PATH.'src/components/Contracts/View/Engine.php',
    'Syscodes\\Contracts\\View\\Factory' => SYS_PATH.'src/components/Contracts/View/Factory.php',
    'Syscodes\\Contracts\\View\\View' => SYS_PATH.'src/components/Contracts/View/View.php',
    'Syscodes\\Contracts\\View\\ViewFinder' => SYS_PATH.'src/components/Contracts/View/ViewFinder.php',
    'Syscodes\\Controller\\Contracts\\ControllerDispatcher' => SYS_PATH.'src/components/Controller/Contracts/ControllerDispatcher.php', 
    'Syscodes\\Controller\\Controller' => SYS_PATH.'src/components/Controller/Controller.php',
    'Syscodes\\Controller\\ControllerDispatcher' => SYS_PATH.'src/components/Controller/ControllerDispatcher.php',
    'Syscodes\\Core\\Bootstrap\\BootConfiguration' => SYS_PATH.'src/components/Core/Bootstrap/BootConfiguration.php',
    'Syscodes\\Core\\Bootstrap\\BootDetectEnvironment' => SYS_PATH.'src/components/Core/Bootstrap/BootDetectEnvironment.php',
    'Syscodes\\Core\\Bootstrap\\BootHandleExceptions' => SYS_PATH.'src/components/Core/Bootstrap/BootHandleExceptions.php',
    'Syscodes\\Core\\Bootstrap\\BootProviders' => SYS_PATH.'src/components/Core/Bootstrap/BootProviders.php', 
    'Syscodes\\Core\\Bootstrap\\BootRegisterFacades' => SYS_PATH.'src/components/Core/Bootstrap/BootRegisterFacades.php', 
    'Syscodes\\Core\\Bootstrap\\BootRegisterProviders' => SYS_PATH.'src/components/Core/Bootstrap/BootRegisterProviders.php',
    'Syscodes\\Core\\Console\\Lenevor' => SYS_PATH.'src/components/Core/Console/Lenevor.php',
    'Syscodes\\Core\\Exceptions\\DebugHandler' => SYS_PATH.'src/components/Core/Exceptions/DebugHandler.php',
    'Syscodes\\Core\\Exceptions\\Handler' => SYS_PATH.'src/components/Core/Exceptions/Handler.php',
    'Syscodes\\Core\\Exceptions\\RegisterErrorViewPaths' => SYS_PATH.'src/components/Core/Exceptions/RegisterErrorViewPaths.php',
    'Syscodes\\Core\\Http\\Exceptions\\AccessDeniedHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/AccessDeniedHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\BadRequestHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/BadRequestHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\ConflictHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/ConflictHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\GoneHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/GoneHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\HttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/HttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\HttpSpecializedException' => SYS_PATH.'src/components/Core/Http/Exceptions/HttpSpecializedException.php',
    'Syscodes\\Core\\Http\\Exceptions\\LenevorException' => SYS_PATH.'src/components/Core/Http/Exceptions/LenevorException.php',
    'Syscodes\\Core\\Http\\Exceptions\\LengthRequiredHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/LengthRequiredHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\MethodNotAllowedHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/MethodNotAllowedHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\NotFoundHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/NotFoundHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\PreconditionFailedHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/PreconditionFailedHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\PreconditionRequiredHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/PreconditionRequiredHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\ServerErrorHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/ServerErrorHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\ServiceUnavailableHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/ServiceUnavailableHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\TooManyRequestsHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/TooManyRequestsHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\UnauthorizedHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/UnauthorizedHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\UnprocessableEntityHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/UnprocessableEntityHttpException.php',
    'Syscodes\\Core\\Http\\Exceptions\\UnsupportedMediaTypeHttpException' => SYS_PATH.'src/components/Core/Http/Exceptions/UnsupportedMediaTypeHttpException.php',
    'Syscodes\\Core\\Http\\Lenevor' => SYS_PATH.'src/components/Core/Http/Lenevor.php',
    'Syscodes\\Core\\Support\\Providers\\EventServiceProvider' => SYS_PATH.'src/components/Core/Support/Providers/EventServiceProvider.php',
    'Syscodes\\Core\\Support\\Providers\\RouteServiceProvider' => SYS_PATH.'src/components/Core/Support/Providers/RouteServiceProvider.php',
    'Syscodes\\Core\\AliasLoader' => SYS_PATH.'src/components/Core/AliasLoader.php',  
    'Syscodes\\Core\\Application' => SYS_PATH.'src/components/Core/Application.php',    
    'Syscodes\\Core\\EnvironmentDetector' => SYS_PATH.'src/components/Core/EnvironmentDetector.php',
    'Syscodes\\Core\\ProviderRepository' => SYS_PATH.'src/components/Core/ProviderRepository.php',
    'Syscodes\\Database\\Concerns\\DetectLostConnections' => SYS_PATH.'src/components/Database/Concerns/DetectLostConnections.php',
    'Syscodes\\Database\\Concerns\\ManagesTransactions' => SYS_PATH.'src/components/Database/Concerns/ManagesTransactions.php',
    'Syscodes\\Database\\Connections\\MySqlConnection' => SYS_PATH.'src/components/Database/Connections/MySqlConnection.php',
    'Syscodes\\Database\\Connections\\PostgresConnection' => SYS_PATH.'src/components/Database/Connections/PostgresConnection.php',
    'Syscodes\\Database\\Connections\\SQLiteConnection' => SYS_PATH.'src/components/Database/Connections/SQLiteConnection.php',
    'Syscodes\\Database\\Connections\\SqlServerConnection' => SYS_PATH.'src/components/Database/Connections/SqlServerConnection.php',
    'Syscodes\\Database\\Connectors\\Connector' => SYS_PATH.'src/components/Database/Connectors/Connector.php',
    'Syscodes\\Database\\Connectors\\ConnectorInterface' => SYS_PATH.'src/components/Database/Connectors/ConnectorInterface.php',
    'Syscodes\\Database\\Connectors\\MySqlConnector' => SYS_PATH.'src/components/Database/Connectors/MySqlConnector.php',
    'Syscodes\\Database\\Connectors\\PostgresConnector' => SYS_PATH.'src/components/Database/Connectors/PostgresConnector.php',
    'Syscodes\\Database\\Connectors\\SQLiteConnector' => SYS_PATH.'src/components/Database/Connectors/SQLiteConnector.php',
    'Syscodes\\Database\\Connectors\\SqlServerConnector' => SYS_PATH.'src/components/Database/Connectors/SqlServerConnector.php',
    'Syscodes\\Database\\Events\\ConnectionEvent' => SYS_PATH.'src/components/Database/Events/ConnectionEvent.php',
    'Syscodes\\Database\\Events\\QueryExecuted' => SYS_PATH.'src/components/Database/Events/QueryExecuted.php',
    'Syscodes\\Database\\Events\\StatementPrepared' => SYS_PATH.'src/components/Database/Events/StatementPrepared.php',
    'Syscodes\\Database\\Events\\TransactionBegin' => SYS_PATH.'src/components/Database/Events/TransactionBegin.php',
    'Syscodes\\Database\\Events\\TransactionCommitted' => SYS_PATH.'src/components/Database/Events/TransactionCommitted.php',
    'Syscodes\\Database\\Events\\TransactionRollback' => SYS_PATH.'src/components/Database/Events/TransactionRollback.php',
    'Syscodes\\Database\\Exceptions\\ConnectionException' => SYS_PATH.'src/components/Database/Exceptions/ConnectionException.php',
    'Syscodes\\Database\\Exceptions\\ModelNotFoundException' => SYS_PATH.'src/components/Database/Exceptions/ModelNotFoundException.php',
    'Syscodes\\Database\\Exceptions\\QueryException' => SYS_PATH.'src/components/Database/Exceptions/QueryException.php',
    'Syscodes\\Database\\Holisen\\Builder' => SYS_PATH.'src/components/Database/Holisen/Builder.php',
    'Syscodes\\Database\\Holisen\\Collection' => SYS_PATH.'src/components/Database/Holisen/Collection.php',
    'Syscodes\\Database\\Holisen\\Model' => SYS_PATH.'src/components/Database/Holisen/Model.php',
    'Syscodes\\Database\\Query\\Grammars\\MySqlGrammar' => SYS_PATH.'src/components/Database/Query/Grammars/MySqlGrammar.php',
    'Syscodes\\Database\\Query\\Grammars\\PostgresGrammar' => SYS_PATH.'src/components/Database/Query/Grammars/PostgresGrammar.php',
    'Syscodes\\Database\\Query\\Grammars\\SQLiteGrammar' => SYS_PATH.'src/components/Database/Query/Grammars/SQLiteGrammar.php',
    'Syscodes\\Database\\Query\\Grammars\\SqlServerGrammar' => SYS_PATH.'src/components/Database/Query/Grammars/SqlServerGrammar.php',
    'Syscodes\\Database\\Query\\Processors\\MySqlProcessor' => SYS_PATH.'src/components/Database/Query/Processors/MySqlProcessor.php',
    'Syscodes\\Database\\Query\\Processors\\PostgresProcessor' => SYS_PATH.'src/components/Database/Query/Processors/PostgresProcessor.php',
    'Syscodes\\Database\\Query\\Processors\\SQLiteProcessor' => SYS_PATH.'src/components/Database/Query/Processors/SQLiteProcessor.php',
    'Syscodes\\Database\\Query\\Processors\\SqlServerProcessor' => SYS_PATH.'src/components/Database/Query/Processors/SqlServerProcessor.php',
    'Syscodes\\Database\\Query\\Processor' => SYS_PATH.'src/components/Database/Query/Processor.php',
    'Syscodes\\Database\\Query\\Builder' => SYS_PATH.'src/components/Database/Query/Builder.php',
    'Syscodes\\Database\\Query\\Expression' => SYS_PATH.'src/components/Database/Query/Expression.php',
    'Syscodes\\Database\\Query\\Grammar' => SYS_PATH.'src/components/Database/Query/Grammar.php',
    'Syscodes\\Database\\Query\\JoinClause' => SYS_PATH.'src/components/Database/Query/JoinClause.php',
    'Syscodes\\Database\\Connection' => SYS_PATH.'src/components/Database/Connection.php',
    'Syscodes\\Database\\ConnectionFactory' => SYS_PATH.'src/components/Database/ConnectionFactory.php',
    'Syscodes\\Database\\ConnectionInterface' => SYS_PATH.'src/components/Database/ConnectionInterface.php',
    'Syscodes\\Database\\ConnectionResolverInterface' => SYS_PATH.'src/components/Database/ConnectionResolverInterface.php',
    'Syscodes\\Database\\DatabaseManager' => SYS_PATH.'src/components/Database/DatabaseManager.php',
    'Syscodes\\Database\\DatabaseServiceProvider' => SYS_PATH.'src/components/Database/DatabaseServiceProvider.php',
    'Syscodes\\Database\\Grammar' => SYS_PATH.'src/components/Database/Grammar.php',
    'Syscodes\\Debug\\FatalExceptions\\FatalErrorException' => SYS_PATH.'src/components/Debug/FatalExceptions/FatalErrorException.php',
    'Syscodes\\Debug\\FatalExceptions\\FatalThrowableError' => SYS_PATH.'src/components/Debug/FatalExceptions/FatalThrowableError.php',
    'Syscodes\\Debug\\FatalExceptions\\FlattenException' => SYS_PATH.'src/components/Debug/FatalExceptions/FlattenException.php',
    'Syscodes\\Debug\\FatalExceptions\\OutOfMemoryException' => SYS_PATH.'src/components/Debug/FatalExceptions/OutOfMemoryException.php',
    'Syscodes\\Debug\\FrameHandler\\Collection' => SYS_PATH.'src/components/Debug/Exceptions/FrameHandler/Collection.php',
    'Syscodes\\Debug\\FrameHandler\\Formatter' => SYS_PATH.'src/components/Debug/Exceptions/FrameHandler/Formatter.php',
    'Syscodes\\Debug\\FrameHandler\\Frame' => SYS_PATH.'src/components/Debug/Exceptions/FrameHandler/Frame.php',
    'Syscodes\\Debug\\FrameHandler\\Supervisor' => SYS_PATH.'src/components/Debug/Exceptions/FrameHandler/Supervisor.php',
    'Syscodes\\Debug\\Handlers\\CallbackHandler' => SYS_PATH.'src/components/Debug/Exceptions/Handlers/CallbackHandler.php',
    'Syscodes\\Debug\\Handlers\\MainHandler' => SYS_PATH.'src/components/Debug/Exceptions/Handlers/MainHandler.php',
    'Syscodes\\Debug\\Handlers\\JsonResponseHandler' => SYS_PATH.'src/components/Debug/Exceptions/Handlers/JsonResponseHandler.php',
    'Syscodes\\Debug\\Handlers\\PlainTextHandler' => SYS_PATH.'src/components/Debug/Exceptions/Handlers/PlainTextHandler.php',
    'Syscodes\\Debug\\Handlers\\PleasingPageHandler' => SYS_PATH.'src/components/Debug/Exceptions/Handlers/PleasingPageHandler.php',
    'Syscodes\\Debug\\Util\\ArrayTable' => SYS_PATH.'src/components/Debug/Exceptions/Util/ArrayTable.php',
    'Syscodes\\Debug\\Util\\Misc' => SYS_PATH.'src/components/Debug/Exceptions/Util/Misc.php',
    'Syscodes\\Debug\\Util\\System' => SYS_PATH.'src/components/Debug/Exceptions/Util/System.php', 
    'Syscodes\\Debug\\Util\\TableLabel' => SYS_PATH.'src/components/Debug/Exceptions/Util/TableLabel.php',
    'Syscodes\\Debug\\Util\\TemplateHandler' => SYS_PATH.'src/components/Debug/Exceptions/Util/TemplateHandler.php',
    'Syscodes\\Debug\\Benchmark' => SYS_PATH.'src/components/Debug/Benchmark.php',
    'Syscodes\\Debug\\ExceptionHandler' => SYS_PATH.'src/components/Debug/ExceptionHandler.php',
    'Syscodes\\Debug\\GDebug' => SYS_PATH.'src/components/Debug/GDebug.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\ApacheAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/ApacheAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\ArrayAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/ArrayAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\DefineAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/DefineAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\EnvAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/EnvAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\GlobalAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/GlobalAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\PutenvAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/PutenvAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\Readers' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/Readers.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\ServerAdapter' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/ServerAdapter.php',
    'Syscodes\\Dotenv\\Repository\\Adapters\\Writers' => SYS_PATH.'src/components/Dotenv/Repository/Adapters/Writers.php',
    'Syscodes\\Dotenv\\Repository\\AdapterRepository' => SYS_PATH.'src/components/Dotenv/Repository/AdapterRepository.php',
    'Syscodes\\Dotenv\\Repository\\RepositoryCreator' => SYS_PATH.'src/components/Dotenv/Repository/RepositoryCreator.php',
    'Syscodes\\Dotenv\\Store\\Contributors\\Paths' => SYS_PATH.'src/components/Dotenv/Store/Contributors/Paths.php',
    'Syscodes\\Dotenv\\Store\\Contributors\\Reader' => SYS_PATH.'src/components/Dotenv/Store/Contributors/Reader.php',
    'Syscodes\\Dotenv\\Store\\FileStore' => SYS_PATH.'src/components/Dotenv/Store/FileStore.php',
    'Syscodes\\Dotenv\\Store\\StoreBuilder' => SYS_PATH.'src/components/Dotenv/Store/StoreBuilder.php',
    'Syscodes\\Dotenv\\Dotenv' => SYS_PATH.'src/components/Dotenv/Dotenv.php',
    'Syscodes\\Encryption\\Exceptions\\DecryptException' => SYS_PATH.'src/components/Encryption/Exceptions/DecryptException.php',
    'Syscodes\\Encryption\\Exceptions\\EncryptException' => SYS_PATH.'src/components/Encryption/Exceptions/EncryptException.php',
    'Syscodes\\Encryption\\Encrypter' => SYS_PATH.'src/components/Encryption/Encrypter.php', 
    'Syscodes\\Encryption\\EncryptionServiceProvider' => SYS_PATH.'src/components/Encryption/EncryptionServiceProvider.php',
    'Syscodes\\Events\\Dispatcher' => SYS_PATH.'src/components/Events/Dispatcher.php', 
    'Syscodes\\Events\\EventServiceProvider' => SYS_PATH.'src/components/Events/EventServiceProvider.php',
    'Syscodes\\Filesystem\\Exceptions\\FileException' => SYS_PATH.'src/components/Filesystem/Exceptions/FileException.php',
    'Syscodes\\Filesystem\\Exceptions\\FileNotFoundException' => SYS_PATH.'src/components/Filesystem/Exceptions/FileNotFoundException.php',
    'Syscodes\\Filesystem\\Exceptions\\FileUnableToMoveException' => SYS_PATH.'src/components/Filesystem/Exceptions/FileUnableToMoveException.php',
    'Syscodes\\Filesystem\\Exceptions\\UnexpectedTypeException' => SYS_PATH.'src/components/Filesystem/Exceptions/UnexpectedTypeException.php',
    'Syscodes\\Filesystem\\FileMimeType' => SYS_PATH.'src/components/Filesystem/FileMimeType.php',
    'Syscodes\\Filesystem\\Filesystem' => SYS_PATH.'src/components/Filesystem/Filesystem.php',  
    'Syscodes\\Filesystem\\FilesystemServiceProvider' => SYS_PATH.'src/components/Filesystem/FilesystemServiceProvider.php', 
    'Syscodes\\Http\\Contributors\\Files' => SYS_PATH.'src/components/Http/Contributors/Files.php',
    'Syscodes\\Http\\Contributors\\Headers' => SYS_PATH.'src/components/Http/Contributors/Headers.php',
    'Syscodes\\Http\\Contributors\\Inputs' => SYS_PATH.'src/components/Http/Contributors/Inputs.php',
    'Syscodes\\Http\\Contributors\\Parameters' => SYS_PATH.'src/components/Http/Contributors/Parameters.php',
    'Syscodes\\Http\\Contributors\\Server' => SYS_PATH.'src/components/Http/Contributors/Server.php',
    'Syscodes\\Http\\Contributors\\Status' => SYS_PATH.'src/components/Http/Contributors/Status.php', 
    'Syscodes\\Http\\Exceptions\\HttpResponseException' => SYS_PATH.'src/components/Http/Exceptions/HttpResponseException.php',
    'Syscodes\\Http\\Exceptions\\HttpURIException' => SYS_PATH.'src/components/Http/Exceptions/HttpURIException.php',
    'Syscodes\\Http\\Exceptions\\PostTooLargeHttpException' => SYS_PATH.'src/components/Http/Exceptions/PostTooLargeHttpException.php',
    'Syscodes\\Http\\Exceptions\\RequestErrorException' => SYS_PATH.'src/components/Http/Exceptions/RequestErrorException.php',
    'Syscodes\\Http\\Http' => SYS_PATH.'src/components/Http/Http.php',
    'Syscodes\\Http\\JsonResponse' => SYS_PATH.'src/components/Http/JsonResponse.php',
    'Syscodes\\Http\\RedirectResponse' => SYS_PATH.'src/components/Http/RedirectResponse.php',
    'Syscodes\\Http\\Request' => SYS_PATH.'src/components/Http/Request.php',
    'Syscodes\\Http\\Response' => SYS_PATH.'src/components/Http/Response.php',
    'Syscodes\\Http\\ResponseTrait' => SYS_PATH.'src/components/Http/ResponseTrait.php',
    'Syscodes\\Http\\URI' => SYS_PATH.'src/components/Http/URI.php',
    'Syscodes\\Log\\Concerns\\ParseLogEnvironment' => SYS_PATH.'src/components/Log/Concerns/ParseLogEnvironment.php',
    'Syscodes\\Log\\Exceptions\\LogException' => SYS_PATH.'src/components/Log/Exceptions/LogException.php',
    'Syscodes\\Log\\Handlers\\FileLogger' => SYS_PATH.'src/components/Log/Handlers/FileLogger.php',
    'Syscodes\\Log\\Logger' => SYS_PATH.'src/components/Log/Logger.php',
    'Syscodes\\Log\\LoggerServiceProvider' => SYS_PATH.'src/components/Log/LoggerServiceProvider.php',
    'Syscodes\\Log\\LogManager' => SYS_PATH.'src/components/Log/LogManager.php',
    'Syscodes\\Pipeline\\Pipeline' => SYS_PATH.'src/components/Pipeline/Pipeline.php',
    'Syscodes\\Pipeline\\PipelineServiceProvider' => SYS_PATH.'src/components/Pipeline/PipelineServiceProvider.php',
    'Syscodes\\Redis\\RedisManager' => SYS_PATH.'src/components/Redis/RedisManager.php',       
    'Syscodes\\Routing\\Exceptions\\ActionNotFoundException' => SYS_PATH.'src/components/Routing/Exceptions/ActionNotFoundException.php',
    'Syscodes\\Routing\\Exceptions\\RouteNotFoundException' => SYS_PATH.'src/components/Routing/Exceptions/RouteNotFoundException.php',
    'Syscodes\\Routing\\Concerns\\RouteCondition' => SYS_PATH.'src/components/Routing/Concerns/RouteCondition.php',
    'Syscodes\\Routing\\Concerns\\RouteDependencyResolver' => SYS_PATH.'src/components/Routing/Concerns/RouteDependencyResolver.php',
    'Syscodes\\Routing\\Concerns\\RouteMap' => SYS_PATH.'src/components/Routing/Concerns/RouteMap.php',
    'Syscodes\\Routing\\Concerns\\RouteResolver' => SYS_PATH.'src/components/Routing/Concerns/RouteResolver.php',
    'Syscodes\\Routing\\AwaitingResourceRegistration' => SYS_PATH.'src/components/Routing/AwaitingResourceRegistration.php',
    'Syscodes\\Routing\\Pipeline' => SYS_PATH.'src/components/Routing/Pipeline.php',
    'Syscodes\\Routing\\Redirector' => SYS_PATH.'src/components/Routing/Redirector.php',
    'Syscodes\\Routing\\ResourceRegister' => SYS_PATH.'src/components/Routing/ResourceRegister.php',
    'Syscodes\\Routing\\Route' => SYS_PATH.'src/components/Routing/Route.php',
    'Syscodes\\Routing\\RouteAction' => SYS_PATH.'src/components/Routing/RouteAction.php',
    'Syscodes\\Routing\\RouteCollection' => SYS_PATH.'src/components/Routing/RouteCollection.php',
    'Syscodes\\Routing\\RouteFileRegister' => SYS_PATH.'src/components/Routing/RouteFileRegister.php',
    'Syscodes\\Routing\\RouteGroup' => SYS_PATH.'src/components/Routing/RouteGroup.php',
    'Syscodes\\Routing\\RouteParamBinding' => SYS_PATH.'src/components/Routing/RouteParamBinding.php',
    'Syscodes\\Routing\\Router' => SYS_PATH.'src/components/Routing/Router.php',
    'Syscodes\\Routing\\RouteRegister' => SYS_PATH.'src/components/Routing/RouteRegister.php',
    'Syscodes\\Routing\\RouteResponse' => SYS_PATH.'src/components/Routing/RouteResponse.php',
    'Syscodes\\Routing\\RoutingServiceProvider' => SYS_PATH.'src/components/Routing/RoutingServiceProvider.php',
    'Syscodes\\Routing\\UrlGenerator' => SYS_PATH.'src/components/Routing/UrlGenerator.php',
    'Syscodes\\Session\\Handlers\\FileSession' => SYS_PATH.'src/components/Session/Handlers/FileSession.php',
    'Syscodes\\Session\\Handlers\\NullSession' => SYS_PATH.'src/components/Session/Handlers/NullSession.php',
    'Syscodes\\Session\\SessionManager' => SYS_PATH.'src/components/Session/SessionManager.php',
    'Syscodes\\Session\\SessionServiceProvider' => SYS_PATH.'src/components/Session/SessionServiceProvider.php',
    'Syscodes\\Session\\Store' => SYS_PATH.'src/components/Session/Store.php',
    'Syscodes\\Support\\Chronos\\Exceptions\\InvalidDateTimeException' => SYS_PATH.'src/components/Support/Chronos/Exceptions/InvalidDateTimeException.php',
    'Syscodes\\Support\\Chronos\\Traits\\Comparison' => SYS_PATH.'src/components/Support/Chronos/Traits/Comparison.php',
    'Syscodes\\Support\\Chronos\\Traits\\Date' => SYS_PATH.'src/components/Support/Chronos/Traits/Date.php',
    'Syscodes\\Support\\Chronos\\Traits\\Difference' => SYS_PATH.'src/components/Support/Chronos/Traits/Difference.php',
    'Syscodes\\Support\\Chronos\\Traits\\Factory' => SYS_PATH.'src/components/Support/Chronos/Traits/Factory.php',
    'Syscodes\\Support\\Chronos\\Traits\\Schedule' => SYS_PATH.'src/components/Support/Chronos/Traits/Schedule.php',
    'Syscodes\\Support\\Chronos\\Traits\\Utilities' => SYS_PATH.'src/components/Support/Chronos/Traits/Utilities.php',
    'Syscodes\\Support\\Chronos\\Time' => SYS_PATH.'src/components/Support/Chronos/Time.php',
    'Syscodes\\Support\\Facades\\App' => SYS_PATH.'src/components/Support/Facades/App.php',
    'Syscodes\\Support\\Facades\\Cache' => SYS_PATH.'src/components/Support/Facades/Cache.php',
    'Syscodes\\Support\\Facades\\Config' => SYS_PATH.'src/components/Support/Facades/Config.php',
    'Syscodes\\Support\\Facades\\Crypt' => SYS_PATH.'src/components/Support/Facades/Crypt.php',
    'Syscodes\\Support\\Facades\\Date' => SYS_PATH.'src/components/Support/Facades/Date.php',
    'Syscodes\\Support\\Facades\\DB' => SYS_PATH.'src/components/Support/Facades/DB.php',
    'Syscodes\\Support\\Facades\\Facade' => SYS_PATH.'src/components/Support/Facades/Facade.php',
    'Syscodes\\Support\\Facades\\File' => SYS_PATH.'src/components/Support/Facades/File.php',
    'Syscodes\\Support\\Facades\\Http' => SYS_PATH.'src/components/Support/Facades/Http.php',
    'Syscodes\\Support\\Facades\\Lang' => SYS_PATH.'src/components/Support/Facades/Lang.php',
    'Syscodes\\Support\\Facades\\Log' => SYS_PATH.'src/components/Support/Facades/Log.php',
    'Syscodes\\Support\\Facades\\Plaze' => SYS_PATH.'src/components/Support/Facades/Plaze.php',
    'Syscodes\\Support\\Facades\\Prime' => SYS_PATH.'src/components/Support/Facades/Prime.php',
    'Syscodes\\Support\\Facades\\Request' => SYS_PATH.'src/components/Support/Facades/Request.php',
    'Syscodes\\Support\\Facades\\Response' => SYS_PATH.'src/components/Support/Facades/Response.php',
    'Syscodes\\Support\\Facades\\Route' => SYS_PATH.'src/components/Support/Facades/Route.php',
    'Syscodes\\Support\\Facades\\Session' => SYS_PATH.'src/components/Support/Facades/Session.php',
    'Syscodes\\Support\\Facades\\View' => SYS_PATH.'src/components/Support/Facades/View.php',
    'Syscodes\\Support\\Chronos' => SYS_PATH.'src/components/Support/Chronos.php', 
    'Syscodes\\Support\\Environment' => SYS_PATH.'src/components/Support/Environment.php',
    'Syscodes\\Support\\Finder' => SYS_PATH.'src/components/Support/Finder.php',
    'Syscodes\\Support\\Flowing' => SYS_PATH.'src/components/Support/Flowing.php',
    'Syscodes\\Support\\InteractsWithTime' => SYS_PATH.'src/components/Support/InteractsWithTime.php',
    'Syscodes\\Support\\Manager' => SYS_PATH.'src/components/Support/Manager.php',
    'Syscodes\\Support\\ServiceProvider' => SYS_PATH.'src/components/Support/ServiceProvider.php',
    'Syscodes\\Support\\Str' => SYS_PATH.'src/components/Support/Str.php',
    'Syscodes\\Support\\WebString' => SYS_PATH.'src/components/Support/WebString.php',
    'Syscodes\\Translation\\TranslationServiceProvider' => SYS_PATH.'src/components/Translation/TranslationServiceProvider.php',
    'Syscodes\\Translation\\Translator' => SYS_PATH.'src/components/Translation/Translator.php',
    'Syscodes\\Version' => SYS_PATH.'src/components/Version/Version.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesComments' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesComments.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesComponents' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesComponents.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesConditionals' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesConditionals.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesEchos' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesEchos.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesHelpers' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesHelpers.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesIncludes' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesIncludes.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesLayouts' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesLayouts.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesLoops' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesLoops.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesRawPhp' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesRawPhp.php',
    'Syscodes\\View\\Transpilers\\Concerns\\TranspilesTranslations' => SYS_PATH.'src/components/View/Transpilers/Concerns/TranspilesTranslations.php',
    'Syscodes\\View\\Transpilers\\Transpiler' => SYS_PATH.'src/components/View/Transpilers/Transpiler.php',
    'Syscodes\\View\\Transpilers\\TranspilerInterface' => SYS_PATH.'src/components/View/Transpilers/TranspilerInterface.php',
    'Syscodes\\View\\Transpilers\\PlazeTranspiler' => SYS_PATH.'src/components/View/Transpilers/PlazeTranspiler.php',
    'Syscodes\\View\\Engines\\TranspilerEngine' => SYS_PATH.'src/components/View/Engines/TranspilerEngine.php',
    'Syscodes\\View\\Engines\\EngineResolver' => SYS_PATH.'src/components/View/Engines/EngineResolver.php',
    'Syscodes\\View\\Engines\\FileEngine' => SYS_PATH.'src/components/View/Engines/FileEngine.php',
    'Syscodes\\View\\Engines\\PhpEngine' => SYS_PATH.'src/components/View/Engines/PhpEngine.php',
    'Syscodes\\View\\Concerns\\ManagesComponents' => SYS_PATH.'src/components/View/Concerns/ManagesComponents.php',
    'Syscodes\\View\\Concerns\\ManagesLayouts' => SYS_PATH.'src/components/View/Concerns/ManagesLayouts.php',
    'Syscodes\\View\\Concerns\\ManagesTranslations' => SYS_PATH.'src/components/View/Concerns/ManagesTranslations.php',
    'Syscodes\\View\\Exceptions\\ViewException' => SYS_PATH.'src/components/View/Exceptions/ViewException.php',
    'Syscodes\\View\\Extensions' => SYS_PATH.'src/components/View/Extensions.php',
    'Syscodes\\View\\Factory' => SYS_PATH.'src/components/View/Factory.php',
    'Syscodes\\View\\FileViewFinder' => SYS_PATH.'src/components/View/FileViewFinder.php',
    'Syscodes\\View\\View' => SYS_PATH.'src/components/View/View.php',
    'Syscodes\\View\\ViewName' => SYS_PATH.'src/components/View/ViewName.php',
    'Syscodes\\View\\ViewServiceProvider' => SYS_PATH.'src/components/View/ViewServiceProvider.php',
    'Psr\\Container\\ContainerExceptionInterface' => SYS_PATH.'src/external/psr/Container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => SYS_PATH.'src/external/psr/Container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => SYS_PATH.'src/external/psr/Container/src/NotFoundExceptionInterface.php',
    'Psr\\Log\\AbstractLogger' => SYS_PATH.'src/external/psr/Log/src/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => SYS_PATH.'src/external/psr/Log/src/InvalidArgumentException.php',
    'Psr\\Log\\LoggerAwareInterface' => SYS_PATH.'src/external/psr/Log/src/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => SYS_PATH.'src/external/psr/Log/src/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => SYS_PATH.'src/external/psr/Log/src/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => SYS_PATH.'src/external/psr/Log/src/LoggerTrait.php',
    'Psr\\Log\\LogLevel' => SYS_PATH.'src/external/psr/Log/src/LogLevel.php',
    'Psr\\Log\\NullLogger' => SYS_PATH.'src/external/psr/Log/src/NullLogger.php',

];