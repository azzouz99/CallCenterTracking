// Cisco Finesse API Functions

// ✅ Sign In to Finesse
async function signInFinesse(username, password) {
    const encodedCredentials = btoa(`${username}:${password}`);

    const response = await fetch(`https://172.20.70.5:8445/finesse/api/User/${username}`, {
        method: "PUT",
        headers: {
            "Authorization": `Basic ${encodedCredentials}`,
            "Content-Type": "application/xml"
        },
        body: `<User><state>LOGIN</state></User>` // Login request
    });

    if (response.ok) {
        console.log("✅ Login successful");
    } else {
        console.error("❌ Login failed", await response.text());
    }
}

// ✅ Sign Out from Finesse
async function signOutFinesse(username, password) {
    const encodedCredentials = btoa(`${username}:${password}`);

    const response = await fetch(`https://172.20.70.5:8445/finesse/api/User/${username}`, {
        method: "PUT",
        headers: {
            "Authorization": `Basic ${encodedCredentials}`,
            "Content-Type": "application/xml"
        },
        body: `<User><state>LOGOUT</state></User>` // Logout request
    });

    if (response.ok) {
        console.log("✅ Logout successful");
    } else {
        console.error("❌ Logout failed", await response.text());
    }
}

// ✅ Get Agent Status
async function getAgentStatus(username, password) {
    const encodedCredentials = btoa(`${username}:${password}`);

    const response = await fetch(`https://172.20.70.5:8445/finesse/api/User/${username}`, {
        method: "GET",
        headers: {
            "Authorization": `Basic ${encodedCredentials}`,
            "Accept": "application/xml"
        }
    });

    if (response.ok) {
        const xmlData = await response.text();
        console.log("✅ Agent Status:", xmlData);
    } else {
        console.error("❌ Failed to get agent status", await response.text());
    }
}

// ✅ Change Agent State (Available, Not Ready, Ready)
async function changeAgentState(username, password, newState) {
    const encodedCredentials = btoa(`${username}:${password}`);

    const response = await fetch(`https://172.20.70.5:8445/finesse/api/User/${username}`, {
        method: "PUT",
        headers: {
            "Authorization": `Basic ${encodedCredentials}`,
            "Content-Type": "application/xml"
        },
        body: `<User><state>${newState}</state></User>` // Change agent state
    });

    if (response.ok) {
        console.log(`✅ Agent state changed to ${newState}`);
    } else {
        console.error(`❌ Failed to change agent state to ${newState}`, await response.text());
    }
}

// ✅ Handle Incoming Call
async function handleIncomingCall(dialogId, username, password, action) {
    const encodedCredentials = btoa(`${username}:${password}`);

    const response = await fetch(`https://172.20.70.5:8445/finesse/api/Dialog/${dialogId}`, {
        method: "PUT",
        headers: {
            "Authorization": `Basic ${encodedCredentials}`,
            "Content-Type": "application/xml"
        },
        body: `<Dialog><state>${action}</state></Dialog>` // Accept, Drop, Transfer, etc.
    });

    if (response.ok) {
        console.log(`✅ Call action '${action}' successful`);
    } else {
        console.error(`❌ Call action '${action}' failed`, await response.text());
    }
}
