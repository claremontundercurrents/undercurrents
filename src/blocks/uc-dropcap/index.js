import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, useBlockProps, useInnerBlocksProps } from "@wordpress/block-editor";

// Register the block
registerBlockType('uc/dropcap', {
    title: "UC Drop Cap", 
    edit: function () {
        const blockProps = useBlockProps();
        const innerBlockProps = useInnerBlocksProps({className: "content-drop", allowedBlocks: ["core/paragraph"]});

        return (
            <div {...blockProps}>
                <div style={{padding: 8, border: "1px solid gray"}}>
                    <div><span style={{textTransform: "uppercase", fontSize: 12, fontFamily: "Inter Tight, sans-serif", letterSpacing: 1, fontWeight: 700}}>Drop cap</span></div>
                    <div {...innerBlockProps}/>
                </div>
            </div>
        );
    },
    save: function () {
        return (
            <div className="content-drop">
                <InnerBlocks.Content/>
            </div>
        )
    },
});