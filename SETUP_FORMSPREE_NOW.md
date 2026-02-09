# ⚡ Quick Fix: Set Up Formspree in 2 Minutes

## The Problem
Your contact form has `YOUR_FORMSPREE_ID` which needs to be replaced with a real Formspree Form ID.

## Quick Solution (2 minutes):

### Step 1: Get Formspree Form ID
1. Go to: **https://formspree.io**
2. Click **"Sign Up"** (or "Log In" if you have an account)
3. After signing up, click **"New Form"**
4. Give it a name: "Mauri-Alpha Contact Form"
5. Click **"Create Form"**
6. You'll see your Form ID - it looks like: `xpzgkqyw` or `abc123def`
7. **Copy this ID**

### Step 2: Update contact.html
1. Open `static/contact.html` in a text editor
2. Find this line (around line 104):
   ```html
   <form id="contact-form" action="https://formspree.io/f/YOUR_FORMSPREE_ID" method="POST">
   ```
3. Replace `YOUR_FORMSPREE_ID` with your actual Form ID
   - Example: `action="https://formspree.io/f/xpzgkqyw"`
4. **Save the file**

### Step 3: Configure Email
1. In Formspree dashboard, click on your form
2. Go to **"Settings"** → **"Email Notifications"**
3. Add email: `taleb.chrif200@gmail.com`
4. Click **"Save"**

### Step 4: Test
1. Refresh your browser at `http://localhost:7001/contact.html`
2. Fill out the form
3. Submit it
4. Check your email: `taleb.chrif200@gmail.com`
5. You should receive the form submission! ✅

---

## Alternative: Use Web3Forms (Even Faster - No Signup!)

If you want it to work immediately without signing up, I can update the form to use Web3Forms which works instantly. Just let me know!
