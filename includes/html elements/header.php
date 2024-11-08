<style>
    .dialog-root {
    position: fixed !important;
    z-index: 2147483644 !important;
    align-items: center !important;
    height: 100% !important;
    left: 0px !important;
    overflow-x: auto !important;
    top: 0px !important;
    display: flex;
    justify-content: center !important;
    width: 100% !important;
  }

  .dialog-overlay {
    background-color: black !important;
    height: 100% !important;
    left: 0px !important;
    opacity: 0.3 !important;
    position: fixed !important;
    top: 0px !important;
    width: 100% !important;
    z-index: -1 !important;
  }
  .dialog-wrapper {
    background: #000 !important;
    max-width: 720px !important;
    width: 100% !important;
    border-radius: 15px !important;
    padding: 24px !important;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1) !important;
  }

  .dialog-wrapper h2 {
    display: block !important;
    line-height: 1.3 !important;
    margin-bottom: 0.5em !important;
    margin-top: 24px !important;
    padding: 0px !important;
    overflow-wrap: break-word !important;
    font-weight: bold !important;
    font-style: normal !important;
    text-decoration: initial !important;
    text-align: center !important;
    font-family: Roboto !important;
    color: rgb(255, 255, 255) !important;
    font-size: 1.75em !important;
  }

  .dialog-wrapper p {
    display: block !important;
    line-height: 1.4 !important;
    margin-bottom: 0.5em !important;
    margin-top: 0px !important;
    overflow-wrap: break-word !important;
    font-weight: normal !important;
    font-style: normal !important;
    text-decoration: initial !important;
    text-align: center !important;
    font-family: Roboto !important;
    color: rgb(255, 255, 255) !important;
    font-size: 1.25em !important;
  }

  .dialog-wrapper .buttons {
    justify-content: center !important;
    align-items: stretch !important;
    display: flex !important;
    flex-wrap: wrap !important;
    font-size: inherit !important;
    margin-top: 1em !important;
    margin-bottom: 14px !important;
    width: 100% !important;
  }

  .dialog-wrapper .buttons button {
    cursor: pointer !important;
    display: flex !important;
    flex-grow: 0 !important;
    letter-spacing: normal !important;
    margin: 0.25em !important;
    opacity: 1 !important;
    outline: none !important;
    overflow-wrap: break-word !important;
    font-weight: bold !important;
    font-style: normal !important;
    text-decoration: initial !important;
    text-align: center !important;
    font-family: Roboto !important;
    color: rgb(255, 255, 255) !important;
    font-size: 1.25em !important;
    padding: 0.5em 1em !important;
    background: rgb(255, 0, 0) !important;
    border: none !important;
    border-radius: 0.25em !important;
  }

  .dialog-wrapper .buttons button p {
    align-self: center !important;
    color: inherit !important;
    cursor: pointer !important;
    font-style: inherit !important;
    font-variant: inherit !important;
    font-weight: inherit !important;
    font-stretch: inherit !important;
    font-size: inherit !important;
    font-family: inherit !important;
    line-height: 1.4em !important;
    margin: 0px !important;
    min-width: 168px !important;
    text-align: inherit !important;
    width: 100% !important;
  }
</style>