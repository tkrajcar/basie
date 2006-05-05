/**
 * 
 */
package net.sourceforge.basie.devices;

import net.sourceforge.basie.*;
/**
 * @author tkrajcar
 *
 */
public class Playlist extends GenericDevice {	
	private SoundFile upcoming[];
	private SoundFile past[];
	private SoundFile current;
	
	/** Returns the current playing SoundFile.
	 * @return The current SoundFile.
	 */
	public SoundFile getCurrent() {
		return current;
	}
	
	/** Sets the current playing SoundFile
	 * @param current The SoundFile to set as current.
	 */
	public void setCurrent(SoundFile current) {
		this.current = current;
	}
	
	/** Returns the past SoundFiles played. 
	 * @return The past SoundFiles played.
	 */
	public SoundFile[] getPast() {
		return past;
	}
	
	/** Returns the upcoming SoundFiles to be played.
	 * @return The upcoming SoundFiles to be played.
	 */
	public SoundFile[] getUpcoming() {
		return upcoming;
	}

}
