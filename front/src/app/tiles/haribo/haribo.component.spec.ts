import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HariboComponent } from './haribo.component';

describe('HariboComponent', () => {
  let component: HariboComponent;
  let fixture: ComponentFixture<HariboComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ HariboComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(HariboComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
