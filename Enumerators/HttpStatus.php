<?php
/**
 * The Opencode Http package
 *
 * @package     Opencode/Support
 * @copyright   2019 (c) Douglas Alves
 * @author      Douglas Alves <https://github.com/alvesdouglaz/>
 * @link        https://github.com/alvesdouglaz/opencode-http
 * @license     https://github.com/alvesdouglaz/opencode-http/blob/master/LICENSE Apache-2.0
 * @version     1.0.0
 */
namespace Opencode\Support\Enumerators
{

    /**
     * HttpStatus
     *
     * @package     Opencode/Http/Enumerators
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    abstract class HttpStatus
    {
        const Continue = 100;
        const SwitchingProtocols = 101;
        const Processing = 102;
        const Ok = 200;
        const Created = 201;
        const Accepted = 202;
        const NonAuthoritativeInformation = 203;
        const NoContent = 204;
        const ResetContent = 205;
        const PartialContent = 206;
        const MultiStatus = 207;
        const AlreadyReported = 208;
        const IMUsed = 226;
        const MultipleChoices = 300;
        const MovedPermanently = 301;
        const Found = 302;
        const SeeOther = 303;
        const NotModified = 304;
        const UseProxy = 305;
        const SwitchProxy = 306;
        const TemporaryRedirect = 307;
        const PermanentRedirect = 308;
        const BadRequest = 400;
        const Unauthorized = 401;
        const PaymentRequired = 402;
        const Forbidden = 403;
        const NotFound = 404;
        const MethodNotAllowed = 405;
        const NotAcceptable = 406;
        const ProxyAuthenticationRequired = 407;
        const RequestTimeout = 408;
        const Conflict = 409;
        const Gone = 410;
        const LengthRequired = 411;
        const PreconditionFailed = 412;
        const RequestEntityTooLarge = 413;
        const RequestURITooLong = 414;
        const UnsupportedMediaType = 415;
        const RequestedRangeNotSatisfiable = 416;
        const ExpectationFailed = 417;
        const ImATeapot = 418;
        const AuthenticationTimeout = 419;
        const EnhanceYourCalm = 420; // Twitter
        const MethodFailureSpringFramework = 421; // Spring Framework
        const UnprocessableEntity = 422;
        const Locked = 423;
        const FailedDependency = 424;
        const MethodFailure = 425;
        const UnorderedCollection = 426;
        const UpgradeRequired = 427;
        const PreconditionRequired = 428;
        const TooManyRequests = 429;
        const RequestHeaderFieldsTooLarge = 431;
        const NoResponse = 444; // Nginx
        const RetryWith = 449; // Microsoft
        const BlockedByWindowsParentalControls = 450; // Microsoft
        const Redirect = 451; // Microsoft
        const UnavailableForLegalReasons = 451;
        const RequestHeaderTooLarge = 494; // Nginx
        const CertError = 495; // Nginx
        const NoCert = 496; // Nginx
        const HTTPtoHTTPS = 497; // Nginx
        const ClientClosedRequest = 499; // Nginx
        const InternalServerError = 500;
        const NoImplemented = 501;
        const BadGateway = 502;
        const ServiceUnavailable = 503;
        const GatewayTimeout = 504;
        const HTTPVersionNotSupported = 505;
        const VariantAlsoNegotiates = 506;
        const InsufficientStorage = 507;
        const LoopDetected = 508;
        const BandwidthLimitExceeded = 509;
        const NotExtended = 510;
        const NetworkAuthenticationRequired = 511;
        const NetworkReadTimeoutError = 598;
        const NetworkConnectTimeoutError = 599;
    }
}