/**
 * Gluon Site Logo Block
 *
 * A custom block for displaying site logos with dark/light mode switching.
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, MediaUpload, MediaUploadCheck, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, Button, RangeControl, ToggleControl, Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

import './editor.css';

/**
 * Edit component
 */
const Edit = ({ attributes, setAttributes }) => {
    const { logoLightId, logoDarkId, width, linkToHome } = attributes;
    const blockProps = useBlockProps({ className: 'gluon-site-logo-block' });

    // Get media URLs from IDs
    const [logoLightUrl, setLogoLightUrl] = wp.element.useState('');
    const [logoDarkUrl, setLogoDarkUrl] = wp.element.useState('');

    // Fetch image URLs when IDs change
    wp.element.useEffect(() => {
        if (logoLightId) {
            wp.apiFetch({ path: `/wp/v2/media/${logoLightId}` })
                .then((media) => setLogoLightUrl(media.source_url))
                .catch(() => setLogoLightUrl(''));
        } else {
            setLogoLightUrl('');
        }
    }, [logoLightId]);

    wp.element.useEffect(() => {
        if (logoDarkId) {
            wp.apiFetch({ path: `/wp/v2/media/${logoDarkId}` })
                .then((media) => setLogoDarkUrl(media.source_url))
                .catch(() => setLogoDarkUrl(''));
        } else {
            setLogoDarkUrl('');
        }
    }, [logoDarkId]);

    const hasLogos = logoLightUrl || logoDarkUrl;

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Logo Settings', 'gluon')} initialOpen={true}>
                    <RangeControl
                        label={__('Logo Height', 'gluon')}
                        value={width}
                        onChange={(value) => setAttributes({ width: value })}
                        min={20}
                        max={200}
                    />
                    <ToggleControl
                        label={__('Link to Home', 'gluon')}
                        checked={linkToHome}
                        onChange={(value) => setAttributes({ linkToHome: value })}
                    />
                </PanelBody>
                <PanelBody title={__('Light Mode Logo', 'gluon')} initialOpen={true}>
                    <MediaUploadCheck>
                        <MediaUpload
                            onSelect={(media) => setAttributes({ logoLightId: media.id })}
                            allowedTypes={['image']}
                            value={logoLightId}
                            render={({ open }) => (
                                <div className="gluon-logo-upload-area">
                                    {logoLightUrl ? (
                                        <>
                                            <img src={logoLightUrl} alt="" style={{ maxWidth: '100%', marginBottom: '10px' }} />
                                            <Button variant="secondary" onClick={open}>
                                                {__('Replace', 'gluon')}
                                            </Button>
                                            <Button
                                                variant="link"
                                                isDestructive
                                                onClick={() => setAttributes({ logoLightId: 0 })}
                                            >
                                                {__('Remove', 'gluon')}
                                            </Button>
                                        </>
                                    ) : (
                                        <Button variant="secondary" onClick={open}>
                                            {__('Select Light Logo', 'gluon')}
                                        </Button>
                                    )}
                                </div>
                            )}
                        />
                    </MediaUploadCheck>
                    <p className="components-base-control__help">
                        {__('Displayed on light backgrounds.', 'gluon')}
                    </p>
                </PanelBody>
                <PanelBody title={__('Dark Mode Logo', 'gluon')} initialOpen={true}>
                    <MediaUploadCheck>
                        <MediaUpload
                            onSelect={(media) => setAttributes({ logoDarkId: media.id })}
                            allowedTypes={['image']}
                            value={logoDarkId}
                            render={({ open }) => (
                                <div className="gluon-logo-upload-area">
                                    {logoDarkUrl ? (
                                        <>
                                            <img src={logoDarkUrl} alt="" style={{ maxWidth: '100%', marginBottom: '10px' }} />
                                            <Button variant="secondary" onClick={open}>
                                                {__('Replace', 'gluon')}
                                            </Button>
                                            <Button
                                                variant="link"
                                                isDestructive
                                                onClick={() => setAttributes({ logoDarkId: 0 })}
                                            >
                                                {__('Remove', 'gluon')}
                                            </Button>
                                        </>
                                    ) : (
                                        <Button variant="secondary" onClick={open}>
                                            {__('Select Dark Logo', 'gluon')}
                                        </Button>
                                    )}
                                </div>
                            )}
                        />
                    </MediaUploadCheck>
                    <p className="components-base-control__help">
                        {__('Displayed on dark backgrounds.', 'gluon')}
                    </p>
                </PanelBody>
            </InspectorControls>

            <div {...blockProps}>
                {hasLogos ? (
                    <div className="gluon-logo-preview" style={{ height: `${width}px` }}>
                        {logoLightUrl && (
                            <img
                                src={logoLightUrl}
                                alt={__('Light mode logo', 'gluon')}
                                className="gluon-logo gluon-logo-light"
                                style={{ height: `${width}px`, width: 'auto' }}
                            />
                        )}
                        {logoDarkUrl && (
                            <img
                                src={logoDarkUrl}
                                alt={__('Dark mode logo', 'gluon')}
                                className="gluon-logo gluon-logo-dark"
                                style={{ height: `${width}px`, width: 'auto' }}
                            />
                        )}
                    </div>
                ) : (
                    <Placeholder
                        icon="format-image"
                        label={__('Gluon Site Logo', 'gluon')}
                        instructions={__('Upload light and dark mode logos in the block settings panel.', 'gluon')}
                    />
                )}
            </div>
        </>
    );
};

/**
 * Register block
 */
registerBlockType('gluon/site-logo', {
    edit: Edit,
    save: () => null, // Server-side render
});
